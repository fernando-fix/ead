@extends('layouts.default')
@section('header', 'Faça seu registro')
@section('content')

    <div class="mx-auto" style="max-width: 400px">
        <form action="" method="POST">
            @csrf

            {{-- Name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                    placeholder="Digite seu nome completo" autocomplete="off" required>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- E-mail --}}
            <div class="mb-3">
                <label for="email" class="form-label">Endereço de e-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                    placeholder="Digite seu e-mail" autocomplete="off" required>
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Password --}}
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha"
                    autocomplete="off" required>
            </div>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            {{-- Password confirmation --}}
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Repita sua senha</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="Digite sua senha novamente" autocomplete="off" required>
            </div>
            @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Submit button --}}
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Registrar-se</button>
            </div>
        </form>

        {{-- Login --}}
        <div class="mb-3 text-end">
            <a href="{{ route('login') }}" class="text-decoration-none">Ja possui uma conta?</a>
        </div>
    </div>

@endsection
