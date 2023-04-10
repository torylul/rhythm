<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>@yield('title', 'Rhythm')</title>
</head>
<body class="body min-vh-100" style="background-color: #141414; color: white; height: 100%;">

@include('inc.nav')
@include('inc.modal_window')

<div>
    @yield('content')
</div>

@if(Request::route()->uri !== "auth" && Request::route()->uri !== "reg" && Request::route()->uri !== "record")
    @include('inc.footer')
@endif

</body>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    var tooltipTriggerList = Array.prototype.slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
</html>
