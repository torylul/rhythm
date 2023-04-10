@extends('layout.layout')

@section('title', 'FAQ')

@section('content')

    <div class="pt-5 pb-5">
        <h1 class="h1_coach_block">
            <a class="btn btn-link btn-floating btn-lg text-light m-1"
               href="{{ route('/') }}"
               role="button"
               data-mdb-ripple-color="light">
                <i class="fa fa-long-arrow-left"></i>
            </a>
            FAQ <span class="span_coach_block">«RHYTHM»</span></h1>
        <p class="p_coach_block pt-3">Здесь размещены часто задаваемые вопросы и ответы на них.</p>
        <div class="w-50 mx-auto pt-5" style="height: 75%;">
            <div class="accordion accordion-flush" id="accordion_faq">
                @forelse((old('itemSections') ?? $itemSections) as $itemSection)
                    <button class="accordion_button w-100" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapse{{ $itemSection->id }}" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapse{{ $itemSection->id }}">
                    <div class="accordion_item p-2">
                        <h4 class="accordion-header d-flex justify-content-between pb-2 pt-2"
                            id="panelsStayOpen-heading{{ $itemSection->id }}">
                                {{ $itemSection->item }}
                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                        </h4>
                        <div id="panelsStayOpen-collapse{{ $itemSection->id }}" class="accordion-collapse collapse"
                             aria-labelledby="panelsStayOpen-heading{{ $itemSection->id }}">
                            <div class="accordion-body accordion_description">
                                {{ $itemSection->description }}
                            </div>
                        </div>
                    </div>
                    </button>
                @empty
                    <p>Вопросов нет</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection
