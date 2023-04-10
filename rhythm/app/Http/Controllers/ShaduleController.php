<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Group;
use App\Models\Hall;
use App\Models\Shadule;
use Illuminate\Http\Request;

class ShaduleController extends Controller
{
    // выводит расписание на страницу
    public function index()
    {
        $days = Day::all();
        return view('shadule.index', [
            'days' => $days,
        ]);
    }

    // выводит подробную информация по расписанию на страницу
    public function show(Shadule $shadule)
    {
        $days = Shadule::where('group_id', $shadule->group_id)->get();
        return view('shadule.show', ['shadule' => $shadule, 'days' => $days]);
    }
}
