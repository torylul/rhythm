@extends('layout.layout')

@section('title', 'Залы')

@section('content')

    <div class="pt-5 pb-5">
        <h1 class="h1_coach_block">
            <a class="btn btn-link btn-floating btn-lg text-light m-1"
               href="{{ route('/') }}"
               role="button"
               data-mdb-ripple-color="light">
                <i class="fa fa-long-arrow-left"></i>
            </a>
            Залы танцевальной студии <span class="span_coach_block">«RHYTHM»</span></h1>
        <p class="p_coach_block pt-3">В наших залах царит комфорт и уют.</p>
        <div class="coach_block_cards w-75 mx-auto pt-5">
            @forelse((old('halls') ?? $halls) as $hall)
                <div class="hall_card">
                    <img src="{{ $hall->image }}" alt="Тренер" class="img_hall_card">
                    <div class="pt-4">
                        <p class="name_hall_card">{{ $hall->name }}</p>
                        <p class="description_hall_card">{{ $hall->description }}</p>
                    </div>
                </div>
            @empty
                <p>Залов нет</p>
            @endforelse
        </div>
    </div>

@endsection
