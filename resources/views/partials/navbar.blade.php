<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon flag-icon-ru
                        mt-1" title="ru" id="lang-flag"></i>
                    <span class="ms-1 me-1 d-none d-md-inline-block" id="lang-title">
                        Русский
                    </span>
                </a>

                <div class="dropdown-menu" aria-labelledby="languageDropdown" id="dropdown-lang">
                    <a href="" class="dropdown-item py-2 lang-link" id="ru">
                        <i class="flag-icon flag-icon-ru" title="ru" id="ru"></i>
                        <span class="ms-1">Русский</span>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="wd-30 ht-30 rounded-circle" src="{{asset('images/avatar.svg')}}" alt="profile">
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                        <div class="mb-3">
                            <img class="wd-80 ht-80 rounded-circle" src="{{asset('images/avatar.svg')}}" alt="">
                        </div>
                        <div class="text-center">
                            <p class="tx-16 fw-bolder">{{auth()->user()->surname .' '.auth()->user()->name}}</p>
                            <p class="tx-12 text-muted">{{auth()->user()->email}}</p>
                        </div>
                    </div>
                    <ul class="list-unstyled p-1">
                        <li class="dropdown-item py-2">
                            <a href="#" class="text-body ms-0">
                                <i class="me-2 icon-md" data-feather="edit"></i>
                                <span>Мой профиль</span>
                            </a>
                        </li>

                        <li class="dropdown-item py-2">
                            <a href="{{ route('logout') }}" class="text-body ms-0" onclick="event.preventDefault();
                                                     document.getElementById('logout-form1').submit();">
                                <i class="me-2 icon-md" data-feather="log-out"></i>
                                <span>Выйти</span>
                            </a>
                            <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
