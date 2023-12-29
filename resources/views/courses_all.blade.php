@extends('layouts.default')

@section('header', 'Todos os cursos')

@section('content')

    {{-- pesquisa --}}
    <div class="d-flex justify-content-between align-items-center mb-4 ">

        @if (auth()->user()->is_teacher)
            <a href="{{ route('courses_manage') }}">Gerenciar cursos</a>
        @endif

        <div class="ms-auto">
            <form action="" method="GET" class="input-group" role="search">

                {{-- filtro --}}
                <select name="filter" id="filter" class="form-select" style="max-width: 140px">
                    <option value="" selected>Todos</option>
                    <option value="my">Meus cursos</option>
                </select>

                <input class="form-control" type="search" name="search" value="{{ $_GET['search'] ?? '' }}"
                    placeholder="Pesquisar" aria-label="Pesquisar" style="max-width: 250px">
                <button class="input-group-text btn btn-outline-secondary" type="submit">
                    Procurar
                </button>
                {{-- se tiver filtro e se tiver filtro diferente de '' --}}
                @if (isset($_GET['search']) && $_GET['search'] !== '')
                    <a href="{{ route('courses_all') }}" class="btn btn-outline-secondary">X</a>
                @endif
            </form>
        </div>
    </div>

    <div class="row row-gap-4 gx-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">

        {{-- course item --}}
        <div class="col">
            <div class="course-item mx-auto h-100 pt-5 px-3 pb-2 d-flex flex-column justify-content-between rounded-3"
                style="max-width: 300px;border: 1px solid #005463">
                <div>
                    <div class="d-flex justify-content-center">
                        <a href="#">
                            <img src="{{ asset('media/courses/vscode.svg') }}" alt="logo do curso" style="height: 120px;">
                        </a>
                    </div>
                </div>
                {{-- author --}}
                <div class="author fs-6 mt-4 text-center">Professor: Fernando</div>
                {{-- title --}}
                <div class="title fs-5 mt-2 text-center">Produtividade com VSCODE</div>
                {{-- course details --}}
                <div class="mt-3 mb-2 d-flex justify-content-between">
                    <span>{{ random_int(25, 60) }} aulas</span>
                    <a href="#" class="link link-info text-decoration-none">Acessar o curso</a>
                </div>
            </div>
        </div>

        {{-- course item --}}
        <div class="col">
            <div class="course-item mx-auto h-100 pt-5 px-3 pb-2 d-flex flex-column justify-content-between rounded-3"
                style="max-width: 300px;border: 1px solid #005463">
                <div>
                    <div class="d-flex justify-content-center">
                        <a href="#">
                            <img src="{{ asset('media/courses/excel.svg') }}" alt="logo do curso" style="height: 120px;">
                        </a>
                    </div>
                </div>
                {{-- author --}}
                <div class="author fs-6 mt-4 text-center">Professor: Fernando</div>
                {{-- title --}}
                <div class="title fs-5 mt-2 text-center">Excel - Básico</div>
                {{-- course details --}}
                <div class="mt-3 mb-2 d-flex justify-content-between">
                    <span>{{ random_int(25, 60) }} aulas</span>
                    <a href="#" class="link link-info text-decoration-none">Acessar o curso</a>
                </div>
            </div>
        </div>

        {{-- course item --}}
        <div class="col">
            <div class="course-item mx-auto h-100 pt-5 px-3 pb-2 d-flex flex-column justify-content-between rounded-3"
                style="max-width: 300px;border: 1px solid #005463">
                <div>
                    <div class="d-flex justify-content-center">
                        <a href="#">
                            <img src="{{ asset('media/courses/word.svg') }}" alt="logo do curso" style="height: 120px;">
                        </a>
                    </div>
                </div>
                {{-- author --}}
                <div class="author fs-6 mt-4 text-center">Professor: Fernando</div>
                {{-- title --}}
                <div class="title fs-5 mt-2 text-center">Word - Básico</div>
                {{-- course details --}}
                <div class="mt-3 mb-2 d-flex justify-content-between">
                    <span>{{ random_int(25, 60) }} aulas</span>
                    <a href="#" class="link link-info text-decoration-none">Acessar o curso</a>
                </div>
            </div>
        </div>

        {{-- course item --}}
        <div class="col">
            <div class="course-item mx-auto h-100 pt-5 px-3 pb-2 d-flex flex-column justify-content-between rounded-3"
                style="max-width: 300px;border: 1px solid #005463">
                <div>
                    <div class="d-flex justify-content-center">
                        <a href="#">
                            <img src="{{ asset('media/courses/laravel.svg') }}" alt="logo do curso" style="height: 120px;">
                        </a>
                    </div>
                </div>
                {{-- author --}}
                <div class="author fs-6 mt-4 text-center">Professor: Fernando</div>
                {{-- title --}}
                <div class="title fs-5 mt-2 text-center">Laravel</div>
                {{-- course details --}}
                <div class="mt-3 mb-2 d-flex justify-content-between">
                    <span>{{ random_int(25, 60) }} aulas</span>
                    <a href="#" class="link link-info text-decoration-none">Acessar o curso</a>
                </div>
            </div>
        </div>

        {{-- course item --}}
        <div class="col">
            <div class="course-item mx-auto h-100 pt-5 px-3 pb-2 d-flex flex-column justify-content-between rounded-3"
                style="max-width: 300px;border: 1px solid #005463">
                <div>
                    <div class="d-flex justify-content-center">
                        <a href="#">
                            <img src="{{ asset('media/courses/javascript.svg') }}" alt="logo do curso"
                                style="height: 120px;">
                        </a>
                    </div>
                </div>
                {{-- author --}}
                <div class="author fs-6 mt-4 text-center">Professor: Fernando</div>
                {{-- title --}}
                <div class="title fs-5 mt-2 text-center">Javascript</div>
                {{-- course details --}}
                <div class="mt-3 mb-2 d-flex justify-content-between">
                    <span>{{ random_int(25, 60) }} aulas</span>
                    <a href="#" class="link link-info text-decoration-none">Acessar o curso</a>
                </div>
            </div>
        </div>

        {{-- course item --}}
        <div class="col">
            <div class="course-item mx-auto h-100 pt-5 px-3 pb-2 d-flex flex-column justify-content-between rounded-3"
                style="max-width: 300px;border: 1px solid #005463">
                <div>
                    <div class="d-flex justify-content-center">
                        <a href="#">
                            <img src="{{ asset('media/courses/vue.svg') }}" alt="logo do curso" style="height: 120px;">
                        </a>
                    </div>
                </div>
                {{-- author --}}
                <div class="author fs-6 mt-4 text-center">Professor: Fernando</div>
                {{-- title --}}
                <div class="title fs-5 mt-2 text-center">Vue</div>
                {{-- course details --}}
                <div class="mt-3 mb-2 d-flex justify-content-between">
                    <span>{{ random_int(25, 60) }} aulas</span>
                    <a href="#" class="link link-info text-decoration-none">Acessar o curso</a>
                </div>
            </div>
        </div>

        {{-- course item --}}
        <div class="col">
            <div class="course-item mx-auto h-100 pt-5 px-3 pb-2 d-flex flex-column justify-content-between rounded-3"
                style="max-width: 300px;border: 1px solid #005463">
                <div>
                    <div class="d-flex justify-content-center">
                        <a href="#">
                            <img src="{{ asset('media/courses/react.svg') }}" alt="logo do curso"
                                style="height: 120px;">
                        </a>
                    </div>
                </div>
                {{-- author --}}
                <div class="author fs-6 mt-4 text-center">Professor: Fernando</div>
                {{-- title --}}
                <div class="title fs-5 mt-2 text-center">React</div>
                {{-- course details --}}
                <div class="mt-3 mb-2 d-flex justify-content-between">
                    <span>{{ random_int(25, 60) }} aulas</span>
                    <a href="#" class="link link-info text-decoration-none">Acessar o curso</a>
                </div>
            </div>
        </div>

        {{-- course item --}}
        <div class="col">
            <div class="course-item mx-auto h-100 pt-5 px-3 pb-2 d-flex flex-column justify-content-between rounded-3"
                style="max-width: 300px;border: 1px solid #005463">
                <div>
                    <div class="d-flex justify-content-center">
                        <a href="#">
                            <img src="{{ asset('media/courses/css.svg') }}" alt="logo do curso" style="height: 120px;">
                        </a>
                    </div>
                </div>
                {{-- author --}}
                <div class="author fs-6 mt-4 text-center">Professor: Fernando</div>
                {{-- title --}}
                <div class="title fs-5 mt-2 text-center">CSS 3</div>
                {{-- course details --}}
                <div class="mt-3 mb-2 d-flex justify-content-between">
                    <span>{{ random_int(25, 60) }} aulas</span>
                    <a href="#" class="link link-info text-decoration-none">Acessar o curso</a>
                </div>
            </div>
        </div>

        {{-- course item --}}
        <div class="col">
            <div class="course-item mx-auto h-100 pt-5 px-3 pb-2 d-flex flex-column justify-content-between rounded-3"
                style="max-width: 300px;border: 1px solid #005463">
                <div>
                    <div class="d-flex justify-content-center">
                        <a href="#">
                            <img src="{{ asset('media/courses/html.svg') }}" alt="logo do curso" style="height: 120px;">
                        </a>
                    </div>
                </div>
                {{-- author --}}
                <div class="author fs-6 mt-4 text-center">Professor: Fernando</div>
                {{-- title --}}
                <div class="title fs-5 mt-2 text-center">HTML 5</div>
                {{-- course details --}}
                <div class="mt-3 mb-2 d-flex justify-content-between">
                    <span>{{ random_int(25, 60) }} aulas</span>
                    <a href="#" class="link link-info text-decoration-none">Acessar o curso</a>
                </div>
            </div>
        </div>
    </div>

@endsection
