@extends('layout.admin_layout')

@section('title', 'Админ группа')

@section('content')

    <div class="w-75 mx-auto">
        @include('inc.error')
    </div>

    <div class="w-75 mx-auto mt-2">
        <div class="d-flex mb-3">
            <a href="{{ route('admin.group.create') }}" class="btn btn-light btn_create rounded-pill">Создать группу</a>
        </div>
        <div class="d-flex mb-3">
            <h4 class="h_admin">Группы: {{ (old('groups') ?? $groups)->count('id') }}</h4>
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Наименование</th>
                <th scope="col">Количество</th>
                <th scope="col">Основание</th>
                <th scope="col">Действия</th>
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
                    <td>
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="m-1 text-center">
                                <a href="{{route('admin.group.more_info', $group->id)}}"
                                   class="btn btn-light"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                            <div class="m-1 text-center">
                                <a href="{{route('admin.group.edit', $group->id)}}"
                                   class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="m-1 text-center">
                                <form action="{{ route('admin.group.destroy', $group->id) }}" method="POST"
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
                    <td colspan=4 class="text-center">Таких групп нет</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
