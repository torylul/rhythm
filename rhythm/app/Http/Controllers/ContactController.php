<?php

namespace App\Http\Controllers;

use App\Models\ItemSection;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // выводит контактную информацию на страницу
    public function index()
    {
        return view('contact.index', [
            'contacts' => ItemSection::where('section_id', 7)->get(),
        ]);
    }
}
