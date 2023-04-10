@extends('layout.layout')

@section('title', 'Команда')

@section('content')

    <div class="pt-5 pb-5">
        <h1 class="h1_coach_block">
            <a class="btn btn-link btn-floating btn-lg text-light m-1"
               href="{{ route('/') }}"
               role="button"
               data-mdb-ripple-color="light">
                <i class="fa fa-long-arrow-left"></i>
            </a> Команда <span class="span_coach_block">«RHYTHM»</span></h1>
        <p class="p_coach_block pt-3">Наша дружная команда состоит из настоящих профессионалов, любящих своё дело.</p>
        <div class="coach_block_cards w-75 mx-auto pt-5">
            @forelse((old('coaches') ?? $coaches) as $coach)
            <div class="coach_card">
                <img src="{{ $coach->image }}" alt="{{ $coach->name }}" class="img_coach_card">
                <div class="pt-4 info_coach_card">
                    <p class="name_coach_card">{{ $coach->fullName }}</p>
                    <p class="email_coach_card">{{ $coach->email }}</p>
                </div>
                <div class="button_block_card">
                    <a href="{{route('coach.show', $coach)}}" class="button_card btn btn-light btn_record">Подробнее</a>
                </div>
            </div>
            @empty
                <p>Преподавателей нет</p>
            @endforelse
        </div>
    </div>

@endsection
