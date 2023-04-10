@extends('layout.admin_layout')

@section('title', 'Панель администратора')

@section('content')

    <div class="w-75 mx-auto mt-2">
        <div class="d-flex mb-3 mt-5">
            <h4 class="h_admin">Новые записи: {{ $records->count('id') }}</h4>
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">Клиент</th>
                <th scope="col">Абонемент</th>
            </tr>
            </thead>
            @forelse($records as $record)
                <tr scope="row">
                    <td>
                        <div class="">{{$record->user->fullName}}</div>
                    </td>
                    <td>
                        <div class="">{{$record->ticket->name}}</div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=2 class="text-center">Новых записей нет</td>
                </tr>
            @endforelse
        </table>
    </div>

    <div class="w-75 mx-auto mt-2">
        <div class="d-flex mb-3 mt-5">
            <h4 class="h_admin">Количество записей по статусу: {{ $records_status->count('id') }}
            </h4>
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">Статус</th>
                <th scope="col">Количество</th>
            </tr>
            </thead>
            @forelse($statuses as $status)
                <tr scope="row">
                    <td>
                        <div class="">{{$status->name}}</div>
                    </td>
                    <td>
                        <div class="">{{$status->accounts->count()}}</div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=2 class="text-center">Записей нет</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection


