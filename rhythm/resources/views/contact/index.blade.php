@extends('layout.layout')

@section('title', 'Контакты')

@section('content')

    <div class="pt-5 pb-5">
        <h1 class="h1_coach_block">
            <a class="btn btn-link btn-floating btn-lg text-light m-1"
               href="{{ route('/') }}"
               role="button"
               data-mdb-ripple-color="light">
                <i class="fa fa-long-arrow-left"></i>
            </a>
            Контактная информация танцевальной студии <span class="span_coach_block">«RHYTHM»</span></h1>
        <p class="p_coach_block pt-3">Наша студия находится не далеко от маршрутной и трамвайной остановок.</p>
        <div class="w-75 mx-auto pt-5 pb-5" style="height: 100%;">
            <div>
                @forelse((old('contacts') ?? $contacts) as $contact)
                    <p>{{ $contact->item }}</p>
                @empty
                    <p>Контактной информации нет</p>
                @endforelse
            </div>
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Adf775e09c75b57379c4bc0a04d201004ed9506937f51810952e6e88810a92cf0&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>

@endsection
