@extends('layout.admin_layout')

@section('title', 'Админ расписание')

@section('content')

    <div class="w-75 mx-auto">
        @include('inc.error')
    </div>

    <div class="w-75 mx-auto mt-2">
        @include('inc.sidebar')
        <div class="d-flex mb-3 mt-3">
            <a href="{{ route('admin.shadule.create') }}" class="btn btn-light btn_create rounded-pill">Создать расписание</a>
        </div>
        <div class="d-flex mb-3">
            <h4 class="h_admin">Расписание: {{ (old('shadules') ?? $shadules)->count('id') }}</h4>
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Группа</th>
                <th scope="col">День</th>
                <th scope="col">Зал</th>
                <th scope="col">Начало</th>
                <th scope="col">Конец</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            @forelse((old('shadules') ?? $shadules) as $shadule)
                <tr scope="row">
                    <td>
                        <div class="">{{$shadule->id}}</div>
                    </td>
                    <td>
                        <div class="">{{$shadule->group->name}}</div>
                    </td>
                    <td>
                        <div class="">{{$shadule->day->name}}</div>
                    </td>
                    <td>
                        <div class="">{{$shadule->hall->name}}</div>
                    </td>
                    <td>
                        <div class="">{{$shadule->dateCreated}}</div>
                    </td>
                    <td>
                        <div class="">{{$shadule->dateUpdated}}</div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="m-1 text-center">
                                <a href="{{route('admin.shadule.edit', $shadule->id)}}"
                                   class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="m-1 text-center">
                                <form action="{{ route('admin.shadule.destroy', $shadule->id) }}" method="POST"
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
                    <td colspan=7 class="text-center">Расписания нет</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
