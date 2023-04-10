<?php

namespace App\Http\Controllers;

use App\Models\ItemSection;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // выводит часто задаваемые вопросы на страницу
    public function index()
    {
        $itemSections = ItemSection::where('section_id', 1)->get();
        return view('faq.index', [
            'page' => Page::all(),
            'sections' => Section::all(),
            'itemSections' => $itemSections,
        ]);
    }
}
