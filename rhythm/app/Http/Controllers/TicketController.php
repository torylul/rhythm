<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    // выводит абонементы на страницу
    public function index()
    {
        return view('ticket.index', [
            'tickets' => Ticket::all(),
        ]);
    }
}
