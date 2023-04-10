@extends('layout.admin_layout')

@section('title', 'Элемент в секции')

@section('content')

    <div class="w-75 mx-auto">
        @include('inc.error')
    </div>

    <div class="w-75 mx-auto">
        <div class="pb-2 pt-2">
            <a href="{{ route('admin.section.section_in_page', $page) }}" class="btn btn-light"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </div>
        <div class="h4 mt-3 mb-4 h_admin">
            Секция: {{ $section_name->name }}
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Элемент</th>
                <th scope="col">Описание</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            @forelse((old('items') ?? $items) as $item)
                <tr scope="row">
                    <td>
                        <div class="">{{$item->id}}</div>
                    </td>
                    <td>
                        @if(($section->id != 4) && ($section->id != 6))
                            <div class="">{{$item->item}}</div>
                        @else
                            <div class=""><img src="{{$item->item}}" alt="{{ $item->item }}"
                                               class="image_section"></div>
                        @endif
                    </td>
                    <td>
                        <div class="">{{$item->description}}</div>
                    </td>
                    <td>
                        <div class="m-1 text-center">
                            <form action="{{ route('admin.section.section_in_page.destroy', [$page, $item->id]) }}"
                                  method="POST"
                                  class="w-75">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=4 class="text-center">Таких элементов нет</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
