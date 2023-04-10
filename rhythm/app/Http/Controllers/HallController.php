<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    // выводит залы на страницу
    public function index()
    {
        return view('hall.index', [
            'halls' => Hall::all(),
        ]);
    }
}
