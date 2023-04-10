<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Day;
use App\Models\Group;
use App\Models\Shadule;
use App\Models\Structure;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // выводит информацию на страницу
    public function index()
    {
        $group = Group::where('count', '<', 7)->get(); // меньше максимального кол-ва
        return view('record.index', [
            'tickets' => Ticket::all(),
            'groups' => $group,
        ]);
    }

    public function store(Request $request)
    {
        $structure = Structure::all();
        $str = $structure->where('user_id', auth()->user()->id)->where('group_id', $request->group_id)->count();
        if ($str == 0) {
            $group = Group::where('id', $request->group_id)->first();
            Structure::create(
                array_merge(
                ['user_id' => auth()->user()->id],
                $request->only(['group_id'])
                )
            );
            Account::create(
                array_merge(
                    ['user_id' => auth()->user()->id],
                    $request->only(['ticket_id'])
                )
            );
            $group->update(
                ['count' => $group->structures->count()]
            );
        }
        else {
            Account::create(
                array_merge(
                    ['user_id' => auth()->user()->id],
                    $request->only(['ticket_id'])
                )
            );
        }
        return to_route('user.profile');
    }
}
