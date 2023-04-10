@extends('layout.layout')

@section('title', 'Авторизация')

@section('content')

    <div class="pt-5 pb-5 div_auth_reg h-100">
        <div class="mx-auto pt-3 div_a_r">
            <h1 class="h1_a_r">Авторизация</h1>
            <form method="POST" action="{{route('auth.check')}}" class="mx-auto form_auth_reg">
                @csrf

                <div class="input-box">
                    <input type="email" class="@error('email') is-invalid @enderror" id="email"
                           aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                    <label>Email</label>
                </div>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="input-box">
                    <input type="password" class="@error('password') is-invalid @enderror" id="password"
                           name="password">
                    <label>Пароль
                        <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                             title="От 8 знаков, заглавная буква, цифра и символ">
                        </div>
                    </label>
                </div>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror

                @error('errorLogin')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
                <br>
                <button type="submit" class="btn btn-light btn_a_r rounded-pill" id="submit_form">Авторизироваться</button>
            </form>
        </div>
    </div>

@endsection
