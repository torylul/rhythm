@extends('layout.layout')

@section('title', 'Подробнее о расписании')

@section('content')
    <div>
        <div class="w-75 mx-auto pt-5 pb-5">
            <h1 class="h1_coach_block">
                <a class="btn btn-link btn-floating btn-lg text-light m-1"
                   href="{{ route('shadule') }}"
                   role="button"
                   data-mdb-ripple-color="light">
                    <i class="fa fa-long-arrow-left"></i>
                </a> Подробная информация о расписание <span class="span_coach_block">«RHYTHM»</span></h1>
            <div class="coach_block_cards_more mx-auto pt-5 w-75" style="height: 75%;">
                <div class="coach_card_more coach_block_cards align-items-center">
                    <div class="text-align-center">
                        <img src="{{$shadule->group->coach->image}}" class="img_coach_card" alt="Тренер-{{ $shadule->group->coach->id }}">
                    </div>
                    <div>
                        <p class="description_coach_card"><span
                                class="span_profile">Время занятий: </span>{{ $shadule->dateCreated }}
                            - {{ $shadule->dateUpdated }}</p>
                        <p class="description_coach_card"><span
                                class="span_profile">Группа: </span>{{ $shadule->group->name }}</p>
                        <p class="description_coach_card"><span
                                class="span_profile">Дата основания: </span>{{ $shadule->group->dateCreated }}</p>
                        <p class="description_coach_card"><span
                                class="span_profile">Количество: </span>{{ $shadule->group->count }} из 7</p>
                        <p class="description_coach_card"><span
                                class="span_profile">Тренер: </span>{{ $shadule->group->coach->fullName }}</p>
                        <p class="description_coach_card"><span
                                class="span_profile">Зал: </span>{{ $shadule->hall->name }}</p>
                        <p><span class="span_profile">Дни занятий: </span>
                            @foreach($days as $day)
                                {{ $day->day->name }},
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
