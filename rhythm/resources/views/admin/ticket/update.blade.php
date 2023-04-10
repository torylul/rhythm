@extends('layout.admin_layout')

@section('title', 'Изменение абонемента')

@section('content')

    <div class="container min-vh-100">
        <div class="pb-2 pt-2 mt-2">
            <a href="{{ route('admin.ticket') }}" class="btn btn-light"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </div>
        <form method="POST" action="{{ route('admin.ticket.update', $ticket->id) }}"
              class="w-50 mx-auto">
            @csrf
            @method('PATCH')
            <h1 class="h3 mb-3 fw-normal text-center">Редактировать абонемент</h1>

            <div class="mt-2">
                <label class="mt-2 mb-2" for="name">Наименование
                    <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                         title="Не менее 3 букв">
                    </div>
                </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $ticket->name) }}">
            </div>
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="mt-2">
                <label class="mt-2 mb-2" for="price">Цена
                    <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                         title="Укажите числовое значение">
                    </div>
                </label>
                <input type="text" class="form-control" id="price" name="price"
                       value="{{ old('price', $ticket->price) }}">
            </div>
            @error('price')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="mt-2">
                <label class="mt-2 mb-2" for="count">Количество дней
                    <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                         title="Укажите числовое значение">
                    </div>
                </label>
                <input type="text" class="form-control" id="count" name="count"
                       value="{{ old('count', $ticket->count) }}">
            </div>
            @error('count')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="mt-2">
                <label class="mt-2 mb-2" for="description">Описание
                    <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                         title="Не менее 5 букв">
                    </div>
                </label>
                <textarea class="form-control" id="description" name="description"
                          rows="3">{{ old('description', $ticket->description) }}</textarea>
            </div>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            <button type="submit" class="w-100 btn btn-lg btn-light mt-4">Изменить</button>
        </form>
    </div>

@endsection
