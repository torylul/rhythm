<?php

namespace App\Http\Controllers;

use App\Models\Coache;
use App\Models\Hall;
use App\Models\ItemSection;
use App\Models\Ticket;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // выводит информацию на страницу
    public function index()
    {
        $photoMain = ItemSection::where('section_id', 6)->limit(1)->get(); // вывод фотографии для перврого блока
        return view('index', [
            'coaches' => Coache::inRandomOrder()->limit(3)->get(), // выводит 3 рандомных тренера
            'halls' => Hall::all(), // выводит залы
            'tickets' => Ticket::all(), // выводит абонементы
            'faqs' => ItemSection::inRandomOrder()->limit(3)->where('section_id', 1)->latest('id')->get(), // выводит 3 рандомных часто задаваемых вопроса
            'pluses' => ItemSection::where('section_id', 2)->get(), // выводит преимущества
            'aboutes' => ItemSection::where('section_id', 5)->get(), // выводит информацию о студии
            'photoMain' => $photoMain, // выводит фотографию для первого блока
            'contacts' => ItemSection::where('section_id', 7)->get(), // выводит контактную информацию
        ]);
    }
}
