<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\AccountDate;
use App\Models\Group;
use App\Models\Status;
use App\Models\Structure;
use App\Models\User;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        return view('admin.record.index', [
            'records' => Account::latest()->get(),
            'statuses' => Status::all(),
        ]);
    }

    public function getRecordByFilter(Request $request)
    {
        $records = Account::all();
        $clients = User::all();

        if ($request->status != 'all') {
            $records = $records->where('status_id', $request->status);
        }
        if ($request->search != null) {
            $clients = User::where('surname', 'like', $request->search.'%')->get();
        }
        $clientsId  = $clients->pluck('id');
        $records = $records->whereIn('user_id', $clientsId);
        return back()->withInput(
            $request->all() + ['records' => $records->sortByDesc('created_at')]
        );
    }

    public function more(Account $record)
    {
        $structures = Structure::where('user_id', $record->user_id)->get();
        $dates = AccountDate::where('account_id', $record->id)->latest('date')->get();
        return view('admin.record.more_info', [
            'structures' => $structures,
            'record' => $record,
            'dates' => $dates,
        ]);
    }

    public function create(Account $record)
    {
        return view('admin.record.date_in_record', [
            'record' => $record,
            'date' => AccountDate::all(),
        ]);
    }

    public function store(Account $record, Request $request)
    {
        $date = AccountDate::all();
        $date = $date->where('account_id', $record->id)->count();

        $ticket = $record->ticket->count;

        AccountDate::create(
            array_merge(
                ['account_id' => $record->id],
                $request->except(['_token', 'account_id'])
            )
        );

        if($date == $ticket-1) {
            $record->update(
                ['status_id' => 2]
            );
        }

        return to_route('admin.record.more_info', $record)->with(['message' => 'Посещение успешно добавлено.', 'category' => 'success']);
    }

    public function destroy(Account $record, AccountDate $date)
    {
        if ($date->delete()) {
            $record->update(
                ['status_id' => 1]
            );
            return back()->with(['message' => 'Посещение успешно удалено.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Возникли ошибки удаления.']);
    }
}
