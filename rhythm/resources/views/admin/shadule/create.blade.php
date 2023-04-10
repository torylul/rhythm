@extends('layout.admin_layout')

@section('title', 'Создание расписания')

@section('content')

    <div class="container min-vh-100">
        <div class="pb-2 pt-2">
            <a href="{{ route('admin.shadule') }}" class="btn btn-light"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </div>
        <form method="POST" action="{{ route('admin.shadule.store') }}"
              class="w-50 mx-auto">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Создать расписание</h1>
            <div class="w-75 mx-auto">
                @include('inc.error')
            </div>
            <div class="mt-2">
                <label class="mt-2 mb-2" for="groups">Группа</label>
                <select class="form-select" aria-label="Default select example" name="group_id" id="groups">
                    @foreach($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-2">
                <label class="mt-2 mb-2" for="days">День</label>
                <select class="form-select" aria-label="Default select example" name="day_id" id="days">
                    @foreach($days as $day)
                        <option value="{{ $day->id }}">{{ $day->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-2">
                <label class="mt-2 mb-2" for="halls">Зал</label>
                <select class="form-select" aria-label="Default select example" name="hall_id" id="halls">
                    @foreach($halls as $hall)
                        <option value="{{ $hall->id }}">{{ $hall->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-2">
                <label class="mt-2 mb-2" for="time_start">Начало занятия</label>
                <input type="time" class="form-control" id="time_start" name="time_start" required>
            </div>

            <div class="mt-2">
                <label class="mt-2 mb-2" for="time_end">Конец занятия</label>
                <input type="time" class="form-control" id="time_end" name="time_end" required>
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-light mt-4">Создать</button>
        </form>
    </div>
@endsection
