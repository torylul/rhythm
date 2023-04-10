@extends('layout.layout')

@section('title', 'Тренер')

@section('content')
    <div>
        <div class="mx-auto pt-5 pb-5">
            <h1 class="h1_coach_block">
                <a class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="{{ route('coach') }}"
                    role="button"
                    data-mdb-ripple-color="light">
                    <i class="fa fa-long-arrow-left"></i>
                </a> Подробная информация о тренере <span class="span_coach_block">«RHYTHM»</span></h1>
            <div class="coach_block_cards_more mx-auto pt-5 w-75" style="height: 75%;">
                <div>
                    <img src="{{$coach->image}}" alt="{{ $coach->name }}" class="img_coach_card_more">
                </div>
                <div class="coach_card_more">
                    <h2 class="h2_coach_card_more">{{ $coach->fullName }}</h2>
                    <p class="email_coach_card_more">{{$coach->email}}</p>
                    <p class="description_coach_card">{{$coach->description}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
