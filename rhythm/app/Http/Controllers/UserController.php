<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
//use http\Client\Curl\User;
use App\Models\Account;
use App\Models\Group;
use App\Models\Status;
use App\Models\Structure;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // выводит страницу для авторизации
    public function auth()
    {
        return view('auth.index');
    }

    // выводит страницу для регистрации
    public function reg()
    {
        return view('reg.index');
    }

    // выводит личный кабинет пользователя
    public function show()
    {
        $tickets = Account::latest()->get();
        $users = User::all();
        $statuses = Status::all();
        $groups = Structure::where('user_id', auth()->user()->id)->get();
        return view('user.profile', [
            'users' => $users,
            'tickets' => $tickets,
            'statuses' => $statuses,
            'groups' => $groups,
        ]);
    }

    // функция для регистрации
    public function store(RegisterRequest $request)
    {
        // создание User в базе данных с хэшированным паролем
        $user = User::create(array_merge(
            ['password' => Hash::make($request->password)],
            $request->only(['name', 'surname', 'number', 'email'])
        ));
        // авторизация
        auth()->login($user);
        return to_route('user.profile');
    }

    // функция для авторизации
    public function loginCheck(LoginRequest $request)
    {
        // проверка зарегистрирован ли пользователь в БД
        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            return to_route('user.profile');
        }
        return back()->withErrors(['errorLogin' => 'Пользователь не найден.']);
    }

    // функция для выхода из личного кабинета
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('/');
    }
}
