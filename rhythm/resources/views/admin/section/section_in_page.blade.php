@extends('layout.admin_layout')

@section('title', 'Админ секции')

@section('content')

    <div class="w-75 mx-auto">
        @include('inc.error')
    </div>

    <div class="w-75 mx-auto">
        <div class="d-flex mb-3 flex-column">
            <div class="pb-2 pt-2">
                <a href="{{ route('admin.section') }}" class="btn btn-light"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            </div>
            <div class="pb-2 pt-2 @if ($sections->count('id') == 0) d-none @endif">
                <a href="{{ route('admin.section.section_in_page.create', $page->id) }}" class="btn btn-light btn_create rounded-pill">Создать элемент</a>
            </div>
        </div>
        <div class="d-flex mb-3 mt-2 flex-column">
            <h4 class="h_admin">Страница: {{ $page->name }}
            </h4>
            <h4 class="h_admin">Секции: {{ (old('sections') ?? $sections)->count('id') }}
            </h4>
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Наименование</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>

            @forelse((old('sections') ?? $sections) as $section)
                <tr scope="row">
                    <td>
                        <div class="">{{$section->id}}</div>
                    </td>
                    <td>
                        <div class="">{{$section->name}}</div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="m-1 text-center">
                                <a href="{{route('admin.section.section_in_page.item_in_section', [$page->id, $section->id])}}"
                                   class="btn btn-light"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=3 class="text-center">Таких секций нет</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
