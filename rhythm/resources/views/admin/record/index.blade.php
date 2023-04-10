@extends('layout.admin_layout')

@section('title', 'Админ записи')

@section('content')

    <div class="w-75 mx-auto">
        @include('inc.error')
    </div>

    <div class="w-75 mx-auto mt-2">
        @include('inc.sidebar-record')
        <div class="d-flex mb-3 mt-3">
            <h4 class="h_admin">Записи: {{ (old('records') ?? $records)->count('id') }}
            </h4>
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Клиент</th>
                <th scope="col">Абонемент</th>
                <th scope="col">Статус</th>
                <th scope="col">Дата оформления</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            @forelse((old('records') ?? $records) as $record)
                <tr scope="row">
                    <td>
                        <div class="">{{$record->id}}</div>
                    </td>
                    <td>
                        <div class="">{{$record->user->fullName}}</div>
                    </td>
                    <td>
                        <div class="">{{$record->ticket->name}}</div>
                    </td>
                    <td>
                        <div
                            class="@if($record->status_id == 2) text-danger @else text-success @endif">{{$record->status->name}}</div>
                    </td>
                    <td>
                        <div class="">{{$record->dateCreated}}</div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="m-1 text-center">
                                <a href="{{route('admin.record.more_info', $record->id)}}"
                                   class="btn btn-light"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=7 class="text-center">Расписания нет</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
