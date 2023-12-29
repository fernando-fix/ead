@extends('layouts.default')
@section('header', 'Faça seu login')
@section('content')

    <div class="mx-auto" style="max-width: 400px">
        <form action="" method="POST">
            @csrf

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

            {{-- Submit button --}}
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </form>

        {{-- Registro --}}
        <div class="mb-3 text-end">
            <a href="{{ route('register') }}" class="text-decoration-none">Ainda não possui uma conta?</a>
        </div>
    </div>

@endsection
