<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Models\Group;
use App\Models\Hall;
use App\Models\Order;
use App\Models\Shadule;
use Illuminate\Http\Request;

class ShaduleController extends Controller
{
    public function index()
    {
        return view('admin.shadule.index', [
            'shadules' => Shadule::all(),
            'days' => Day::all(),
            'groups' => Group::all(),
            'halls' => Hall::all(),
        ]);
    }

    public function getShaduleByFilter(Request $request)
    {
        $shadules = Shadule::all();
        if ($request->day != 'all') {
            $shadules = $shadules->where('day_id', $request->day);
        }
        if ($request->group != 'all') {
            $shadules = $shadules->where('group_id', $request->group);
        }
        if ($request->hall != 'all') {
            $shadules = $shadules->where('hall_id', $request->hall);
        }
        return back()->withInput(
            $request->all() + ['shadules' => $shadules]
        );
    }

    public function create()
    {
        return view('admin.shadule.create', [
            'groups' => Group::all(),
            'days' => Day::all(),
            'halls' => Hall::all(),
        ]);
    }

    public function store(Request $request)
    {
        $group_count = Shadule::where('group_id', $request->group_id)->where('day_id', $request->day_id);
        $time_count = Shadule::where('time_start', $request->time_start . ':00')->where('day_id', $request->day_id);
        $hall_count = Shadule::where('hall_id', $request->hall_id)->where('day_id', $request->day_id);
        $day_count = Shadule::where('day_id', $request->day_id);
        if ($group_count->count() != 0) {
            return back()->withErrors(['error' => 'Группа уже занимается в этот день.']);
        }
        elseif ($time_count->count() != 0 && $hall_count->count() != 0)
        {
            return back()->withErrors(['error' => 'Зал в это время уже занят.']);
        }
        Shadule::create(
            $request->except(['_token'])
        );
        return to_route('admin.shadule')->with(['message' => 'Расписание успешно создано.', 'category' => 'success']);
    }

    public function destroy(Shadule $shadule)
    {
        if ($shadule->delete()) {
            return back()->with(['message' => 'Расписание успешно удалено.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Возникли ошибки удаления.']);
    }

    public function edit(Shadule $shadule)
    {
        return view('admin.shadule.update', [
            'shadule' => $shadule,
            'groups' => Group::all(),
            'days' => Day::all(),
            'halls' => Hall::all(),
        ]);
    }

    public function update(Request $request, Shadule $shadule)
    {
        $values = $request->except('_token');
        if ($shadule->update($values)) {
            return to_route('admin.shadule')->with(['message' => 'Расписание успешно изменено.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Произошла ошибка обновления распсиания.']);
    }
}
