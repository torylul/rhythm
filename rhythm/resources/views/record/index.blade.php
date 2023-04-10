@extends('layout.layout')

@section('title', 'Запись на занятие')

@section('content')

    <div class="pt-5 pb-5 div_auth_reg h-100">
        <div class="mx-auto pt-3 div_a_r">
            <h1 class="h1_a_r">Запись
                <div class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                     title="Если Вы уже состоите в группе и не хотите вступать в дополнительные, то выберите эту
                        же группу.">
                </div>
            </h1>
            <form method="POST" action="{{route('record.store')}}" class="form_auth_reg mx-auto">
                @method('PATCH')
                @csrf

                <div class="input-box">
                    <select aria-label="Default select example" name="ticket_id"
                            id="ticket">
                        @foreach($tickets as $ticket)
                            <option value="{{ $ticket->id }}">{{ $ticket->name }}</option>
                        @endforeach
                    </select>
                    <label>Выберите абонемент:</label>
                </div>

                <div class="input-box">
                    <select aria-label="Default select example" name="group_id" id="group">
                        @foreach($groups as $group)
                            @if($group->shadules->count() != 0)
                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label>Выберите группу:</label>
                </div>

                <button type="submit" class="btn btn-light btn_a_r rounded-pill mt-3" id="submit_form">
                    Записаться
                </button>
            </form>
        </div>
    </div>

@endsection
