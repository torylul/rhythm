@extends('layout.admin_layout')

@section('title', 'Добавление посещения')

@section('content')

    <div class="container min-vh-100">
        <div class="pb-2 pt-2 mt-2">
            <a href="{{ route('admin.record.more_info', $record->id) }}" class="btn btn-light"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </div>
        <form method="POST" action="{{ route('admin.record.more_info.store', $record->id) }} "
              class="w-50 mx-auto">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Добавить посещение</h1>

            <div class="mt-2">
                <label for="date" class="mt-2 mb-2">Выберите дату:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-light mt-4">Добавить</button>
        </form>
    </div>

@endsection
