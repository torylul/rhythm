@extends('layout.admin_layout')

@section('title', 'О клиенте')

@section('content')

    <div class="w-75 mx-auto">
        @include('inc.error')
    </div>

    <div class="w-75 mx-auto">
        <div class="pb-2 pt-2">
            <a href="{{ route('admin.record') }}" class="btn btn-light"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </div>
        @if($record->status_id == 1)
            <div class="d-flex mb-3 mt-3">
                <a href="{{ route('admin.record.more_info.create', $record->id) }}" class="btn btn-light btn_create rounded-pill">Добавить посещение</a>
            </div>
        @else
            <div class="h4 mt-3 mb-3 h_admin">
                Посещения закончились!
            </div>
        @endif
        <div class="h4 mt-3 mb-3 h_admin">
            Клиент: {{ $record->user->fullName }}
        </div>
        <div class="h4 mt-3 mb-3 h_admin">
            Абонемент: {{ $record->ticket->name }}
        </div>

        <div class="mb-3 mt-3 h4 text-center">Группы клиента</div>

        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Группа</th>
            </tr>
            </thead>
            @forelse((old('structures') ?? $structures) as $structure)
                <tr scope="row">
                    <td>
                        <div class="">{{$structure->id}}</div>
                    </td>
                    <td>
                        <div class="">{{$structure->group->name}}</div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=2 class="text-center">У клиента нет групп</td>
                </tr>
            @endforelse
        </table>

        <div class="mb-3 mt-5 h4 text-center">Даты посещений</div>

        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Дата посещения</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            @forelse($dates as $date)
                <tr scope="row">
                    <td>
                        <div class="">{{$date->id}}</div>
                    </td>
                    <td>
                        <div class="">{{$date->dateCreated}}</div>
                    </td>
                    <td>
                        <div class="text-center">
                            <form action="{{ route('admin.record.more_info.destroy', [$record, $date->id]) }}"
                                  method="POST"
                                  class="w-75">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=3 class="text-center">У клиента нет посещений</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
