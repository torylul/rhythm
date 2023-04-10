@extends('layout.admin_layout')

@section('title', 'Админ страницы')

@section('content')

    <div class="w-75 mx-auto">
        @include('inc.error')
    </div>

    <div class="w-75 mx-auto">
        <div class="d-flex mb-3 mt-3">
            <h4 class="h_admin">Страницы: {{ (old('pages') ?? $pages)->count('id') }}</h4>
        </div>
        <table class="table table-hover table-dark">
            <thead class="thead-light">
            <tr>
                <th scope="col">№</th>
                <th scope="col">Наименование</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            @forelse((old('pages') ?? $pages) as $page)
                <tr scope="row">
                    <td>
                        <div class="">{{$page->id}}</div>
                    </td>
                    <td>
                        <div class="">{{$page->name}}</div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="m-1 text-center">
                                <a href="{{route('admin.section.section_in_page', $page->id)}}"
                                   class="btn btn-light"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan=3 class="text-center">Таких страниц нет</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
