<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\FileService;
use App\Http\Requests\admin\CoachRequest;
use App\Models\Coache;
use App\Models\Group;
use App\Models\Shadule;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        return view('admin.coach.index', [
            'coaches' => Coache::all(),
        ]);
    }

    public function more(Coache $coach) {
        $groups = Group::all();
        $groups = $groups->where('coach_id', $coach->id);
        return view('admin.coach.more_info', [
            'groups' => $groups,
            'coach' => $coach,
        ]);
    }

    public function create()
    {
        return view('admin.coach.create');
    }

    public function store(CoachRequest $request)
    {
        $path = FileService::upload($request->file('image'), '/coach');
        Coache::create(array_merge(
            ['image' => $path],
            $request->except(['_token', 'image']
            )
        ));
        return to_route('admin.coach')->with(['message' => 'Тренер успешно создан.', 'category' => 'success']);
    }

    public function destroy(Coache $coach)
    {
        FileService::delete($coach->image, "coach/");
        if ($coach->delete()) {
            return back()->with(['message' => 'Тренер успешно удален.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Возникли ошибки удаления.']);
    }

    public function edit(Coache $coach)
    {
        return view('admin.coach.update', [
            'coach' => $coach
        ]);
    }

    public function update(CoachRequest $request, Coache $coach)
    {
        $values = $request->except('_token', 'image');
        if (isset($request->image)) {
            $path = FileService::update($coach->image, $request->file('image'), 'coach/');
            if ($path) {
                $values += ['image' => $path];
            }
        }
        if ($coach->update($values)) {
            return to_route('admin.coach')->with(['message' => 'Тренер успешно изменен.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Произошла ошибка обновления зала.']);
    }
}
