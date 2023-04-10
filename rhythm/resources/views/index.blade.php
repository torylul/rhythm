@extends('layout.layout')

@section('title', 'Rhythm')

@section('content')

    {{--    ПЕРВЫЙ БЛОК--}}
    @foreach($photoMain as $photo)
        <div class="main_start_block"
             style="background: url('{{ $photo->item }}') no-repeat center/cover, rgba(0, 0, 0, 0.5);">
            <div class="text_main_start_block">
                <h4 class="h4_main_start_block">cover dance studio</h4>
                <h1 class="h1_main_start_block">RHYTHM</h1>
            </div>
        </div>
    @endforeach

    <div class="pt-5 pb-3">
        @foreach($aboutes as $about)
            <h1 class="h1_coach_block">{{ $about->item }}</h1>
            <div class="w-50 mx-auto about_block mt-5">
                {{ $about->description }}
            </div>
        @endforeach
    </div>

    {{--    Преимущества--}}
    <div class="pt-5">
        <div class="w-50 mx-auto">
            <h1 class="h1_coach_block">О танцевальной студии <span class="span_coach_block">«RHYTHM»</span></h1>
            <p class="pt-3 text-center">В нашу студию можно записаться с любым уровнем танцевальной подготовки.
                Наше направление - к-поп и хореография корейских танцевальных студий (1M, Prepix, ALiEN и др).
                Для записи в группы, пожалуйста, свяжитесь с нами по номеру телефона +7 (950)
                320-32-42.</p>
            <p class="p_plus_block mt-5 h3 text-center profile_h">Почему стоит выбрать нас?</p>
        </div>
        <div class="d-flex justify-content-between w-75 mx-auto pt-3">
            <ul>
                @forelse((old('pluses') ?? $pluses) as $plus)
                    <li class="p-2">{{ $plus->item }}</li>
                @empty
                    <p>Преимуществ нет</p>
                @endforelse
            </ul>
        </div>
    </div>

    {{--    ПРАЙС--}}
    <div class="pt-5 pb-3">
        <h1 class="h1_coach_block">Прайс танцевальной студии <span class="span_coach_block">«RHYTHM»</span></h1>
        <p class="p_coach_block pt-3">Наша танцевальная студия предоставит Вам самые доступные цены на абонементы.</p>
        <div class="coach_block_cards w-75 mx-auto pt-3 align-items-center">
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
        <a class="btn btn-light btn_record rounded-pill mx-auto d-block mt-4"
           href="{{ route('ticket') }}"
           role="button"
           data-mdb-ripple-color="light">Посмотреть все
        </a>
    </div>

    {{--    ЗАЛ--}}
    <div class="pt-5 pb-3">
        <h1 class="h1_coach_block">Залы танцевальной студии <span class="span_coach_block">«RHYTHM»</span></h1>
        <p class="p_coach_block pt-3">В наших залах царит комфорт и уют.</p>
        <div class="coach_block_cards w-75 mx-auto pt-3">
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
        <a class="btn btn-light btn_record rounded-pill mx-auto d-block mt-4"
           href="{{ route('hall') }}"
           role="button"
           data-mdb-ripple-color="light">Посмотреть все
        </a>
    </div>

    {{--    ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ--}}
    <div class="pt-5 pb-3">
        <h1 class="h1_coach_block">FAQ <span class="span_coach_block">«RHYTHM»</span></h1>
        <p class="p_coach_block pt-3">Здесь размещены часто задаваемые вопросы и ответы на них.</p>
        <div class="w-50 mx-auto pt-5">
            <div class="accordion accordion-flus" id="accordion_faq">
                @forelse((old('faqs') ?? $faqs) as $faq)
                    <button class="accordion_button w-100" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapse{{ $faq->id }}" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapse{{ $faq->id }}">
                        <div class="accordion_item p-2">
                            <h4 class="accordion-header d-flex justify-content-between pb-2 pt-2"
                                id="panelsStayOpen-heading-{{ $faq->id }}">
                                {{ $faq->item }}

                                <i class="fa fa-arrow-down" aria-hidden="true"></i>
                            </h4>
                            <div id="panelsStayOpen-collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                 aria-labelledby="panelsStayOpen-heading-{{ $faq->id }}">
                                <div class="accordion-body accordion_description">
                                    {{ $faq->description }}
                                </div>
                            </div>
                        </div>
                    </button>
                @empty
                    <p>Вопросов нет</p>
                @endforelse
            </div>
            <a class="btn btn-light btn_record rounded-pill mx-auto d-block mt-4"
               href="{{ route('faq') }}"
               role="button"
               data-mdb-ripple-color="light">Посмотреть все
            </a>
        </div>
    </div>

    {{--    КОМАНДА--}}
    <div class="pt-5 pb-3">
        <h1 class="h1_coach_block">Команда <span class="span_coach_block">«RHYTHM»</span></h1>
        <p class="p_coach_block pt-3">Наша дружная команда состоит из настоящих профессионалов, любящих своё дело.</p>
        <div class="coach_block_cards w-75 mx-auto pt-3">
            @forelse((old('coaches') ?? $coaches) as $coach)
                <div class="coach_card">
                    <img src="{{ $coach->image }}" alt="{{ $coach->name }}" class="img_coach_card">
                    <div class="pt-4 info_coach_card">
                        <p class="name_coach_card">{{ $coach->name }} {{ $coach->surname }}</p>
                        <p class="email_coach_card">{{ $coach->email }}</p>
                    </div>
                    <div class="button_block_card">
                        <a href="{{route('coach.show', $coach)}}"
                           class="button_card btn btn-light btn_record">Подробнее</a>
                    </div>
                </div>
            @empty
                <p>Преподавателей нет</p>
            @endforelse
        </div>
        <a class="btn btn-light btn_record rounded-pill mx-auto d-block mt-4"
           href="{{ route('coach') }}"
           role="button"
           data-mdb-ripple-color="light">Посмотреть все
        </a>
    </div>

    {{--    КОНТАКТЫ--}}
    <div class="pt-5 pb-3">
        <h1 class="h1_coach_block">Контактная информация танцевальной студии <span
                class="span_coach_block">«RHYTHM»</span></h1>
        <p class="p_coach_block pt-3">Наша студия находится не далеко от маршрутной и трамвайной остановок.</p>
        <div class="w-50 mx-auto pt-3 pb-3">
            <div>
                @forelse((old('contacts') ?? $contacts) as $contact)
                        <p>{{ $contact->item }}</p>
                @empty
                    <p>Контактной информации нет</p>
                @endforelse
            </div>
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Adf775e09c75b57379c4bc0a04d201004ed9506937f51810952e6e88810a92cf0&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <a class="btn btn-light btn_record rounded-pill mx-auto d-block mt-4"
           href="{{ route('contact') }}"
           role="button"
           data-mdb-ripple-color="light">Посмотреть все
        </a>
    </div>

@endsection
