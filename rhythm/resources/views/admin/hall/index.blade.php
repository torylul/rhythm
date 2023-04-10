@extends('layout.admin_layout')

@section('title', 'Админ залы')

@section('content')

    <div class="w-75 mx-auto">
        @include('inc.error')
    </div>

    <div class="w-75 mx-auto mt-2">
        <div class="d-flex mb-3">
            <a href="{{ route('admin.hall.create') }}" class="btn btn-light btn_create rounded-pill">Создать зал</a>
        </div>
        <div class="d-flex mb-3">
            <h4 class="h_admin">Залы: {{ (old('halls') ?? $halls)->count('id') }}</h4>
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Фото</th>
                <th scope="col">Наименование</th>
                <th scope="col">Описание</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            @forelse((old('halls') ?? $halls) as $hall)
                <tr scope="row">
                    <td>
                        <div class="">{{$hall->id}}</div>
                    </td>
                    <td>
                        <div class=""><img src="{{ $hall->image }}" alt="{{ $hall->image }}" class="img_coach_card"></div>
                    </td>
                    <td>
                        <div class="">{{$hall->name}}</div>
                    </td>
                    <td>
                        <div class="">{{$hall->description}}</div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="m-1 text-center">
                                <a href="{{route('admin.hall.edit', $hall->id)}}"
                                   class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="m-1 text-center">
                                <form action="{{ route('admin.hall.destroy', $hall->id) }}" method="POST"
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
                    <td colspan=5 class="text-center">Таких залов нет</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
