@extends('layout.admin_layout')

@section('title', 'Админ команда')

@section('content')

    <div class="w-75 mx-auto">
        @include('inc.error')
    </div>

    <div class="w-75 mx-auto mt-2">
        <div class="d-flex mb-3">
            <a href="{{ route('admin.coach.create') }}" class="btn btn-light btn_create rounded-pill">Создать тренера</a>
        </div>
        <div class="d-flex mb-3">
            <h4 class="h_admin">Тренеры: {{ (old('coaches') ?? $coaches)->count('id') }}</h4>
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Фото</th>
                <th scope="col">ФИ</th>
                <th scope="col">Почта</th>
                <th scope="col">Описание</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            @forelse((old('coaches') ?? $coaches) as $coach)
                <tr scope="row">
                    <td>
                        <div class="">{{$coach->id}}</div>
                    </td>
                    <td>
                        <div class=""><img src="{{ $coach->image }}" alt="{{ $coach->image }}" class="img_coach_card"></div>
                    </td>
                    <td>
                        <div class="">{{$coach->fullName}}</div>
                    </td>
                    <td>
                        <div class="">{{$coach->email}}</div>
                    </td>
                    <td>
                        <div class="">{{$coach->description}}</div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="m-1 text-center">
                                <a href="{{route('admin.coach.more_info', $coach->id)}}"
                                   class="btn btn-light"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                            <div class="m-1 text-center">
                                <a href="{{route('admin.coach.edit', $coach->id)}}"
                                   class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="m-1 text-center">
                                <form action="{{ route('admin.coach.destroy', $coach->id) }}" method="POST"
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
                    <td colspan=6 class="text-center">Таких тренеров нет</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
