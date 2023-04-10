<header style="background-color: black;" class="d-block">
    <nav class="navbar navbar-expand-lg p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('/') }}">
                <img src="{{ asset('images/logo2.png') }}" alt="logo" width="40">
                RHYTHM
            </a>
            <button class="navbar-toggler navbar-dark bg-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('ticket') }}">ПРАЙС</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('shadule') }}">РАСПИСАНИЕ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('coach') }}">КОМАНДА</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('contact') }}">КОНТАКТЫ</a>
                    </li>
                    @guest
                        <li>
                            <button type="submit" class="btn btn-light btn_record rounded-pill" data-bs-toggle="modal"
                                    data-bs-target="#modal_window_main">Записаться
                            </button>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('user.profile') }}"><i class="fa fa-user-circle"
                                                                                           aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="{{ route('logout') }}"><i class="fa fa-sign-out"
                                                                                     aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <div class="btn btn-light btn_record_aure rounded-pill">
                                <a href="{{ route('record') }}">Записаться</a>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
