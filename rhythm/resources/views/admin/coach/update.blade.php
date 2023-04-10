@extends('layout.admin_layout')

@section('title', 'Изменение тренера')

@section('content')

    <div class="container min-vh-100">
            <div class="pb-2 pt-2">
                <a href="{{ route('admin.coach') }}" class="btn btn-light"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            </div>
        <form method="POST" action="{{ route('admin.coach.update', $coach->id) }}"
              class="w-50 mx-auto" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h1 class="h3 mb-3 fw-normal text-center">Редактировать тренера</h1>

            <div class="mt-2">
                <label class="mt-2 mb-2" for="name">Имя
                    <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                         title="Не менее 3 букв">
                    </div>
                </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $coach->name) }}">
            </div>
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="mt-2">
                <label class="mt-2 mb-2" for="surname">Фамилия
                    <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                         title="Не менее 3 букв">
                    </div>
                </label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname', $coach->surname) }}">
            </div>
            @error('surname')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="mt-2">
                <label for="email" class="mt-2 mb-2">Email</label>
                <input type="email" class="form-control" id="email"
                       aria-describedby="emailHelp" name="email" value="{{ old('email', $coach->email) }}">
            </div>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="mt-2">
                <label class="mt-2 mb-2" for="description">Описание
                    <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                         title="Не менее 5 букв">
                    </div>
                </label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $coach->description) }}</textarea>
            </div>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="mt-3">
                <label for="image" class="form-label mt-2 mb-2">Выберите изображение</label>
                <input class="form-control" type="file" id="image" name="image" accept="image/*" onchange="updatePreview(this, 'image-preview')">
            </div>
            @error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="mt-3 text-center">
                <img id="image-preview"
                     src="{{ old('image', $coach->image) }}"
                     style="width:200px" alt="placeholder">
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-light mt-4">Изменить</button>
        </form>
    </div>
@endsection
