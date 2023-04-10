@extends('layout.admin_layout')

@section('title', 'Группы у тренера')

@section('content')

    <div class="w-75 mx-auto">
        <div class="pb-2 pt-2">
            <a href="{{ route('admin.coach') }}" class="btn btn-light"><i class="fa fa-chevron-left"
                                                                          aria-hidden="true"></i></a>
        </div>
        <div class="h4 mt-3 mb-4 h_admin">
            Тренер: {{ $coach->fullName }}
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Группа</th>
                <th scope="col">Количество людей</th>
                <th scope="col">Дата основания</th>
            </tr>
            </thead>
            @forelse((old('groups') ?? $groups) as $group)
                <tr scope="row">
                    <td>
                        <div class="">{{$group->id}}</div>
                    </td>
                    <td>
                        <div class="">{{$group->name}}</div>
                    </td>
                    <td>
                        <div class="">{{$group->count}}</div>
                    </td>
                    <td>
                        <div class="">{{$group->dateCreated}}</div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=3 class="text-center">У преподавателя нет групп</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
