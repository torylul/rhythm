@extends('layout.layout')

@section('title', 'Прайс')

@section('content')

    <div class="pt-5 pb-5">
        <h1 class="h1_coach_block">
            <a class="btn btn-link btn-floating btn-lg text-light m-1"
               href="{{ route('/') }}"
               role="button"
               data-mdb-ripple-color="light">
                <i class="fa fa-long-arrow-left"></i>
            </a>
            Прайс танцевальной студии <span class="span_coach_block">«RHYTHM»</span></h1>
        <p class="p_coach_block pt-3">Наша танцевальная студия предоставит Вам самые доступные цены на абонементы.</p>
        <div class="coach_block_cards w-75 mx-auto pt-5 align-items-center" style="height: 75%;">
            @forelse((old('tickets') ?? $tickets) as $ticket)
                <div class="coach_card">
                    <div class="pt-4 info_coach_card">
                        <p class="name_ticket_card">{{ $ticket->name }}</p>
                        <p class="price_ticket_card">{{ $ticket->price }} ₽</p>
                        <p class="description_ticket_card">{{ $ticket->description }}</p>
                    </div>
                </div>
            @empty
                <p>Абонементов нет</p>
            @endforelse
        </div>
    </div>

@endsection
