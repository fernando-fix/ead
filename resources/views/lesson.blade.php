@extends('layouts.default')
@section('title', 'Community Coders - Aula 1')
@section('header', '')
@section('content')

    {{-- curso --}}
    <div class="bg-body-secondary p-1 rounded-1 d-flex" >
        {{-- vídeo --}}
        <div class="col">
            <div id="video-area">
                <iframe src="https://www.youtube.com/embed/Ejkb_YpuHWs?list=PLHz_AreHm4dkZ9-atkcmcBaMZdmLHft8n"
                    title="Começa aqui o novo @CursoemVideo de HTML5 e CSS3" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div id="description-area" class="d-flex justify-content-between mt-3">
                <div class="d-flex align-items-center ps-2">
                    Aula 1 muito lega de HTML
                </div>
                <div id="lesson-control" class=" d-flex align-items-center">
                    <a href="#" class="link text-decoration-none ms-2">
                        Próxima aula
                    </a>
                </div>
                <button class="btn btn-outline-secondary"
                    onclick="document.querySelector('#modules-area').classList.toggle('d-none'); this.innerText = this.innerText == 'Mostrar aulas' ? 'Esconder aulas' : 'Mostrar aulas'">
                    Mostrar aulas
                </button>
            </div>
        </div>
        {{-- lista de aulas --}}
        <div id="modules-area" class="d-none">
            <div class="modules px-2" style="width: 250px; overflow-y: scroll;max-height: 644px">
                @for ($i = 0; $i < 10; $i++)
                    <div class="module">
                        <div class="module-title p-1 rounded-1 text-center fs-5 bg-body-tertiary text-primary" role="button">
                            Modulo - {{ $i + 1 }}
                        </div>
                        <ul class="module-list p-0">
                            @for ($j = 1; $j < 6; $j++)
                                <li class="module-item p-1 mt-1 bg-body-tertiary rounded-1 ps-2 d-flex align-items-center">
                                    <input type="checkbox" id="#" title="Marcar como assistido" role="button">
                                    <span class="ms-2">{{ $j }}</span>
                                    <a href="" title="Aula legal que está com o nome muito grande"
                                        class="link text-decoration-none   ms-2 d-block w-100 text-reset">
                                        Aula legal que está com o nome muito grande
                                    </a>
                                </li>
                            @endfor
                        </ul>
                    </div>
                @endfor
            </div>
        </div>
    </div>

@endsection
