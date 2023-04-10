<?php

namespace App\Http\Controllers;

use App\Models\Coache;
use Illuminate\Http\Request;

class CoacheController extends Controller
{
    // выводит тренеров на страницу
    public function index()
    {
        return view('coach.index', [
            'coaches' => Coache::all(),
        ]);
    }

    // выводит подробную информацию о тренерах на страницу
    public function show(Coache $coach)
    {
        return view('coach.show', ['coach' => $coach]);
    }
}
