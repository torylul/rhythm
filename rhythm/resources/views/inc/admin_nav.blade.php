<header style="background-color: black;" class="d-block">
    <nav class="navbar navbar-expand-lg p-3">
        <div class="container-fluid">
            <button class="navbar-toggler navbar-dark bg-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown2"
                    aria-controls="navbarNavDropdown2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('admin.index') }}"><i class="fa fa-home" aria-hidden="true"></i> Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('admin.ticket') }}"><i class="fa fa-ticket" aria-hidden="true"></i> Прайс</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('admin.shadule') }}"><i class="fa fa-calendar" aria-hidden="true"></i> Расписание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('admin.record') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Запись</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('admin.group') }}"><i class="fa fa-users" aria-hidden="true"></i> Группы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('admin.coach') }}"><i class="fa fa-user" aria-hidden="true"></i> Команда</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('admin.hall') }}"><i class="fa fa-building" aria-hidden="true"></i> Залы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('admin.section') }}"><i class="fa fa-wrench" aria-hidden="true"></i> Контент</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="{{ route('admin.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
