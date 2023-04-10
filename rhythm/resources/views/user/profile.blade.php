@extends('layout.layout')

@section('title', 'Профиль')

@section('content')

    <div class="pt-5 pb-5">
        <h1 class="h1_coach_block">
            <a class="btn btn-link btn-floating btn-lg text-light m-1"
               href="{{ route('/') }}"
               role="button"
               data-mdb-ripple-color="light">
                <i class="fa fa-long-arrow-left"></i>
            </a>
            Личный кабинет</h1>
        <div class="w-75 mx-auto pt-3">
            <div class="">
                <p><span class="span_profile">Имя:</span> {{ auth()->user()->name }}</p>
            </div>
            <div class="">
                <p><span class="span_profile">Фамилия:</span> {{ auth()->user()->surname }}</p>
            </div>
            <div class="">
                <p><span class="span_profile">Почта:</span> {{ auth()->user()->email }}</p>
            </div>

            <div class="">
                <p><span class="span_profile">Группы, в которых Вы состоите:</span>
                    @forelse($groups as $group)
                        <span>{{ $group->group->name }};</span>
                    @empty
                        <span>Вы не состоите в группах.</span>
                    @endforelse
                </p>
            </div>

            <div class="mb-3 mt-4 h3 text-center profile_h">Ваши абонементы</div>

            <div class="w-100 mx-auto table_profile">
                <table class="table table-hover table-dark">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Абонемент</th>
                        <th scope="col">Цена</th>
                        <th scope="col" class="d-none d-lg-block">Дата оформления</th>
                        <th scope="col">Статус</th>
                    </tr>
                    </thead>
                    @forelse((old('tickets') ?? $tickets->where('user_id', auth()->user()->id)) as $ticket)
                        <tr scope="row">
                            <td>
                                <div class="">{{$ticket->ticket->name}}</div>
                            </td>
                            <td>
                                <div class="">{{$ticket->ticket->price}}</div>
                            </td>
                            <td class="d-none d-lg-block">
                                <div>{{$ticket->dateCreated}}</div>
                            </td>
                            <td>
                                <div class="@if($ticket->status_id == 2) text-danger @else text-success @endif">{{$ticket->status->name}}</div>
                            </td>
                            @empty
                                <td colspan=4 class="text-center">
                                    <div class="">У вас нет абонементов</div>
                                </td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>

@endsection
