<footer class="text-center text-white pt-3" style="background-color: black;">
    <section class="d-flex mx-auto justify-content-between p-3 border-top">
        <div class="">
            <a class="navbar-brand" href="{{ route('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo" width="40">
                RHYTHM
            </a>
        </div>
        <div class="p_footer d-none d-lg-block">
            <div>
                <a class="nav-link mx-2" href="{{ route('ticket') }}">Прайс</a>
            </div>
            <div>
                <a class="nav-link mx-2" href="{{ route('shadule') }}">Расписание</a>
            </div>
            <div>
                <a class="nav-link mx-2" href="{{ route('coach') }}">Команда</a>
            </div>
            <div>
                <a class="nav-link mx-2" href="{{ route('faq') }}">FAQ</a>
            </div>
            <div>
                <a class="nav-link mx-2" href="{{ route('contact') }}">Контакты</a>
            </div>
        </div>
        <div class="p_footer">
            <p>КОНТАКТЫ</p>
            <div>
                <p>Телефон: +7 (950) 320-32-42</p>
                <p>Адрес: г. Челябинск, ул. Горького, д. 38</p>
            </div>

        </div>
    </section>

    <!-- Copyright -->
    <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-light" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
