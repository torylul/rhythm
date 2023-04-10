@extends('layout.admin_layout')

@section('title', 'Админ прайс')

@section('content')

    <div class="w-75 mx-auto">
        @include('inc.error')
    </div>

    <div class="div_admin mx-auto mt-2">
        <div class="d-flex mb-3">
            <a href="{{ route('admin.ticket.create') }}" class="btn btn-light btn_create rounded-pill">Создать абонемент</a>
        </div>
        <div class="d-flex mb-3">
            <h4 class="h_admin">Абонементы: {{ (old('tickets') ?? $tickets)->count('id') }}</h4>
        </div>
        <div class="table-responsive-xl">
            <table class="table table-hover table-dark">
                <thead class="thead-light">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Действия</th>
                </tr>
                </thead>
                @forelse((old('tickets') ?? $tickets) as $ticket)
                    <tr scope="row">
                        <td>
                            <div class="">{{$ticket->id}}</div>
                        </td>
                        <td>
                            <div class="">{{$ticket->name}}</div>
                        </td>
                        <td>
                            <div class="">{{$ticket->price}}</div>
                        </td>
                        <td>
                            <div class="">{{$ticket->count}}</div>
                        </td>
                        <td>
                            <div class="">{{$ticket->description}}</div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div class="m-1 text-center">
                                    <a href="{{route('admin.ticket.edit', $ticket->id)}}"
                                       class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </div>
                                <div class="m-1 text-center">
                                    <form action="{{ route('admin.ticket.destroy', $ticket->id) }}" method="POST"
                                          class="w-75">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan=6 class="text-center">Таких абонементов нет</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection
