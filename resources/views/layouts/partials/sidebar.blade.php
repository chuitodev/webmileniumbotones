<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="{{ route('dashboard') }}">
        <img class="navbar-brand-dark" src="{{ asset('img/milenium-bco.svg') }}" alt="Logo" /> <img class="navbar-brand-light" src="{{ asset('img/milenium-bco.svg') }}" alt="Milenium logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
            <div class="d-block">
            <h2 class="h5 mb-3">{{ Auth::user()->name }}</h2>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                    <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    Cerrar sesión
                </a>
            </form>
            </div>
        </div>
        <div class="collapse-close d-md-none">
            <a href="#sidebarMenu" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                aria-label="Toggle navigation">
                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
                <img src="{{ asset('img/milenium-bco.svg') }}" alt="Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text"></span>
            </a>
        </li>
        <li class="nav-item active">
            <a href="{{ route('dashboard') }}" class="nav-link d-flex justify-content-between">
            <span>
                <span class="sidebar-icon"><i class="fas fa-chart-line"></i></span>
                <span class="sidebar-text">Dashboard</span>
            </span>
            </a>
        </li>
        <li class="nav-item">
            <span
            class="nav-link  collapsed  d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#submenu-app">
            <span>
                <span class="sidebar-icon"><i class="fas fa-building"></i></span>
                <span class="sidebar-text">Sucursales</span>
            </span>
            <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </span>
            </span>
            <div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">
            <ul class="flex-column nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('office.show', 'Guadalupe') }}">
                        <i class="fas fa-warehouse"></i>
                        <span class="sidebar-text">&nbsp;Guadalupe</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('office.show', 'Reynosa') }}">
                        <i class="fas fa-warehouse"></i>
                        <span class="sidebar-text">&nbsp;Reynosa</span>
                    </a>
                </li>
            </ul>
            </div>
        </li>

        @if (Auth::user()->role == 'Administrador')
        <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link d-flex justify-content-between">
            <span>
                <span class="sidebar-icon"><i class="fas fa-user-cog"></i></span>
                <span class="sidebar-text">Usuarios</span>
            </span>
            </a>
        </li>

        <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
        <li class="nav-item">
            <i class="fab fa-laravel"></i>
            <span class="sidebar-text" style="font-size: 12px;">Laravel v{{ Illuminate\Foundation\Application::VERSION }}</span>
            </a>
        </li>
        <li class="nav-item">
            <i class="fab fa-php"></i>
            <span class="sidebar-text" style="font-size: 12px;">PHP v{{ PHP_VERSION }}</span>
        </li>
        @endif

        </ul>
    </div>
</nav>
