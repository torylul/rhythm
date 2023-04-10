@extends('layout.layout')

@section('title', 'Расписание')

@section('content')

    <div class="pt-5 pb-5">
        <h1 class="h1_coach_block">
            <a class="btn btn-link btn-floating btn-lg text-light m-1"
               href="{{ route('/') }}"
               role="button"
               data-mdb-ripple-color="light">
                <i class="fa fa-long-arrow-left"></i>
            </a>
            Расписание танцевальной студии <span class="span_coach_block">«RHYTHM»</span></h1>
        <p class="p_coach_block pt-3">Наша танцевальная студия предоставит удобное расписание для Вас.</p>
        <p class="p_coach_block pt-3"><i class="fa fa-lock"></i> - группа переполнена.</p>
        <div class="shadule_block_cards w-75 mx-auto pt-3" style="height: 75%;">
            @foreach($days as $day)
                <div class="shadule_card">
                    <div class="pb-2 day_shadule">{{ $day->name }}</div>
                    @forelse($day->shadules()->orderBy('time_start')->get() as $shadule)
                        <a href="{{route('shadule.show', $shadule)}}">
                            <div class="pt-4 info_shadule_card">
                                <p class="time_shadule_card">{{ $shadule->dateCreated }}
                                    - {{ $shadule->dateUpdated }}</p>
                                <p class="hall_shadule_card">{{ $shadule->group->name }}
                                     @if($shadule->group->count == 7) <i class="fa fa-lock"></i>@endif
                                </p>
                            </div>
                        </a>
                        <hr>
                    @empty
                        <div class="pt-4 info_shadule_card">Занятий нет</div>
                    @endforelse
                </div>
            @endforeach
        </div>
    </div>

@endsection
