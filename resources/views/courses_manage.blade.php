@extends('layouts.default')

@section('header', 'Gerenciar cursos')

@php

    $courses = ['CSS', 'HTML básico', 'Javascript', 'PHP', 'Laravel', 'Vue', 'React'];
@endphp

@section('content')

    <a href="" class="btn btn-sm btn-success mb-3">Cadastrar novo curso</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Modulos</th>
                <th>Aulas</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td>
                        {{ $courses[array_rand($courses)] }}



                    </td>
                    <td>{{ random_int(5, 10) }}</td>
                    <td>{{ random_int(25, 60) }}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-info btn-sm">Editar</a>
                        <a href="" class="btn btn-sm btn-danger btn-sm"
                            onclick="return confirm('Confirma a exclusão?')">Deletar</a>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>


@endsection
