<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\TicketRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('admin.ticket.index', [
            'tickets' => Ticket::all(),
        ]);
    }

    public function create()
    {
        return view('admin.ticket.create');
    }

    public function store(TicketRequest $request)
    {
        Ticket::create(
            $request->except('_token'
            ));
        return to_route('admin.ticket')->with(['message' => 'Абонемент успешно добавлен.', 'category' => 'success']);
    }

    public function destroy(Ticket $ticket)
    {
        if ($ticket->delete()) {
            return back()->with(['message' => 'Абонемент успешно удален.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Возникли ошибки удаления.']);
    }

    public function edit(Ticket $ticket)
    {
        return view('admin.ticket.update', [
            'ticket' => $ticket
        ]);
    }

    public function update(TicketRequest $request, Ticket $ticket)
    {
        $values = $request->except('_token');
        if ($ticket->update($values)) {
            return to_route('admin.ticket')->with(['message' => 'Абонемент успешно изменен.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Произошла ошибка обновления товара.']);
    }
}
