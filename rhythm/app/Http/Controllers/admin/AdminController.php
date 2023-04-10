<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\LoginRequest;
use App\Http\Requests\admin\RegisterRequest;
use App\Models\Account;
use App\Models\Admin;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $records = Account::where('created_at', Carbon::now()->toDateString())->limit(10)->get();
        $records_status = Account::all();
        return view('admin.index', [
            'records' => $records,
            'records_status' => $records_status,
            'statuses' => Status::all(),
        ]);
    }

    public function reg()
    {
        return view('admin.reg.index');
    }

    public function auth()
    {
        return view('admin.auth.index');
    }

    // регистрация
    public function store(RegisterRequest $request)
    {
        Admin::create(array_merge(
            ['password' => Hash::make($request->password)],
            $request->only(['email'])
        ));
        return to_route('admin.index');
    }

    // авторизация
    public function check(LoginRequest $request)
    {
        if(auth('admin')->attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            return to_route('admin.index');
        }
        return back()->withErrors(['errorLogin' => 'Администратор не найден.']);
    }

    // выйти
    public function logout(Request $request)
    {
        auth('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('/');
    }
}
