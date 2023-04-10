<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\GroupRequest;
use App\Models\Coache;
use App\Models\Group;
use App\Models\Shadule;
use App\Models\Structure;
use Carbon\Carbon;
use Automattic\WooCommerce\Internal\Utilities\Users;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        return view('admin.group.index', [
            'groups' => Group::all(),
        ]);
    }

    public function more(Group $group)
    {
        $structures = Structure::all()->where('group_id', $group->id);
        $coach = Coache::all()->where('id', $group->coach_id);
        $days = Shadule::where('group_id', $group->id)->get();
        return view('admin.group.more_info', [
            'group' => $group,
            'coach' => $coach,
            'structures' => $structures,
            'days' => $days
        ]);
    }

    public function create()
    {
        return view('admin.group.create', [
            'coaches' => Coache::all(),
        ]);
    }

    public function store(GroupRequest $request)
    {
        Group::create(
            array_merge(
                ['created_at' => Carbon::now()->toDateTimeString()],
                $request->except(['_token', 'created_at']))
        );
        return to_route('admin.group')->with(['message' => 'Группа успешно создана.', 'category' => 'success']);
    }

    public function destroy(Group $group)
    {
        if ($group->delete()) {
            return back()->with(['message' => 'Группа успешно удалена.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Возникли ошибки удаления.']);
    }

    public function destroyUser(Group $group, Structure $structure)
    {
        if ($structure->delete()) {
            $group->update(
                ['count' => $group->structures->count()]
            );
            return back()->with(['message' => 'Участник успешно удален.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Возникли ошибки удаления.']);
    }

    public function edit(Group $group)
    {
        return view('admin.group.update', [
            'group' => $group,
            'coaches' => Coache::all(),
        ]);
    }

    public function update(GroupRequest $request, Group $group)
    {
        $values = $request->except('_token');
        if ($group->update($values)) {
            return to_route('admin.group')->with(['message' => 'Группа успешно изменена.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Произошла ошибка обновления зала.']);
    }
}
