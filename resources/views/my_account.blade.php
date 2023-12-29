@extends('layouts.default')

@section('header', 'Minha conta')

@section('content')

    <div class="mx-auto" style="max-width: 400px">

        <form action="" method="POST">
            @csrf

            {{-- Id do usuário --}}
            <input type="hidden" name="id" value="{{ auth()->user()->id }}">

            {{-- Imagem de perfil --}}
            <div class="mb-3 d-flex justify-content-center">
                <img id="img_preview" src="{{ asset('media/avatars/profile.png') }}" alt="profile"
                    style="
                    height: 100px;
                    width: 100px;
                    object-fit: cover;
                    clip-path: inset(0);
                    border-radius: 50%;
                    ">
            </div>

            {{-- Alterar imagem --}}
            <div class="mb-3">
                <label for="image" class="form-label">Imagem</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*"
                    onchange="document.getElementById('img_preview').src = window.URL.createObjectURL(this.files[0])">
            </div>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}"
                    placeholder="Digite seu nome completo" autocomplete="off" required>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- E-mail --}}
            <div class="mb-3">
                <label for="email" class="form-label">Endereço de e-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}"
                    placeholder="Digite seu e-mail" autocomplete="off" required readonly>
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Password --}}
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha"
                    autocomplete="off">
            </div>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Password confirmation --}}
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Repita sua senha</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="Digite sua senha novamente" autocomplete="off">
            </div>
            @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Would you like to be a teacher? --}}
            <div class="mb-3">
                <label for="is_teacher" class="form-label">Habilitar perfil de professor?</label>
                <select class="form-select" id="is_teacher" name="is_teacher">
                    <option {{ auth()->user()->is_teacher ? 'selected' : '' }} value="1">Sim</option>
                    <option {{ !auth()->user()->is_teacher ? 'selected' : '' }} value="0">Não</option>
                </select>
            </div>
            @error('is_teacher')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Tema do site --}}
            <div class="mb-3">
                <label for="theme" class="form-label">Tema do site</label>
                <select class="form-select" id="theme" name="theme">
                    <option {{ auth()->user()->theme == 'light' ? 'selected' : '' }} value="light">Claro</option>
                    <option {{ auth()->user()->theme == 'dark' ? 'selected' : '' }} value="dark">Escuro</option>
                </select>
            </div>
            @error('theme')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Submit button --}}
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>

    </div>

@endSection
