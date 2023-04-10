@extends('layout.admin_layout')

@section('title', 'Информация о группе')

@section('content')

    <div class="w-75 mx-auto">
        @include('inc.error')
    </div>

    <div class="w-75 mx-auto">
        <div class="pb-2 pt-2">
            <a href="{{ route('admin.group') }}" class="btn btn-light"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </div>
        <div class="h4 mt-2 mb-3 h_admin">
            Группа: {{ $group->name }}
        </div>
        <div class="h4 mt-2 mb-3 h_admin">
            Тренер: {{ $group->coach->fullName }}
        </div>
        <div class="h4 mt-2 mb-3 h_admin">
            Количество: {{ $group->count }} из 7
        </div>
        <div class="h4 mt-2 mb-3 h_admin">
            Дни занятий:
            @foreach($days as $day)
                    {{ $day->day->name }}
            @endforeach
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Участник</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            @forelse((old('structures') ?? $structures) as $structure)
                <tr scope="row">
                    <td>
                        <div class="">{{$structure->id}}</div>
                    </td>
                    <td>
                        <div class="">{{$structure->user->fullName}}</div>
                    </td>
                    <td>
                        <div class="text-center">
                            <form action="{{ route('admin.group.more_info.destroy', [$group, $structure->user->id]) }}"
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
                    <td colspan=3 class="text-center">В группе нет информации</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
