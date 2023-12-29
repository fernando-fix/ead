<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="{{ auth()->user()->theme ?? 'dark' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>@yield('title', 'Community Coders')</title>
</head>

<body class="bg-body-tertiary">
    <header>
        <nav class="navbar bg-body-secondary">
            <div class="container-xxl">
                {{-- Nome e logo --}}
                <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo" class="d-inline-block align-text-top"
                        style="height: 40px; width: auto">
                    Community Coders
                </a>

                <div class="d-flex align-items-center gap-3">
                    @auth
                        {{-- profile avatar --}}
                        <img src="{{ asset('media/avatars/profile.png') }}" alt=""
                            style="height: 50px; width: auto">
                    @endauth

                    {{-- Menu --}}
                    <div class="dropdown">
                        <button class="btn btn-link nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Menu
                        </button>
                        <ul class="dropdown-menu">
                            @auth
                                {{-- Usuário logado --}}
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('courses_all') }}">Cursos</a></li>
                                <li><a class="dropdown-item" href="{{ route('my_account') }}">Minha conta</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
                            @else
                                {{-- Usuário não logado --}}
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Registrar-se</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-xxl">
            <h1 class="text-center mt-3 mb-5">@yield('header', 'Sem cabeçalho')</h1>
        </div>

    </header>

    <main>

        <div class="container-xxl">

            @yield('content', 'Sem conteúdo')

        </div>

    </main>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
