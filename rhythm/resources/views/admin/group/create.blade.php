@extends('layout.admin_layout')

@section('title', 'Создание группы')

@section('content')

    <div class="container min-vh-100">
        <div class="pb-2 pt-2">
            <a href="{{ route('admin.group') }}" class="btn btn-light"><i class="fa fa-chevron-left"
                                                                            aria-hidden="true"></i></a>
        </div>
        <form method="POST" action="{{ route('admin.group.store') }}"
              class="w-50 mx-auto">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Создать группу</h1>

            <div class="mt-2">
                <label class="mt-2 mb-2" for="name">Наименование
                    <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                         title="Не менее 3 букв">
                    </div>
                </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="mt-2">
                <label class="mt-2 mb-2" for="coach">Тренер</label>
                <select class="form-select" aria-label="Default select example" name="coach_id" id="coach">
                    @foreach($coaches as $coach)
                        <option value="{{ $coach->id }}">{{ $coach->fullName }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-light mt-4">Создать</button>
        </form>
    </div>
@endsection
