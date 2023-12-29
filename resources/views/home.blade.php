@extends('layouts.default')
@section('header', 'Bem-vindo à Community Coders')
@section('content')


    <div class="row">
        <div class="col-12 col-lg-5 align-self-center">
            <h2 class="pt-2">Uma plataforma feita por DEVs para DEVs</h2>
            <ul class="mt-4 d-flex flex-column gap-4">
                <li class="fs-4">Explore os cursos da plataforma</li>
                <li class="fs-4">Desenvolva o seu próprio curso ou projeto</li>
                <li class="fs-4">Trabalhe colaborativamente</li>
                <li class="fs-4">Be Happy</li>
            </ul>
        </div>
        <div class="col-12 col-lg-7">
            <img src="{{ asset('assets/img/home-bg-01.png') }}" alt="banner" class="img-fluid w-100 rounded">
        </div>
    </div>

    <h2 class="text-center mt-5">Cursos disponíveis</h2>

    <div class="row row-gap-4 gx-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mt-3">

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








    @endsection
