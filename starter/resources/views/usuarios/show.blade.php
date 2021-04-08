@extends('components.layout')


@section('content')

    <a class="btn btn-warning" href="{{ route('usuarios.listar') }}">Voltar</a>

    <h2>Mostrar usuário de ID  {{ $usuario->id }} </h2>

    <h5>Nome: {{ $usuario->name }} </h5>

@endsection
