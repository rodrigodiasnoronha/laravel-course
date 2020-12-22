@extends('components.layout')

@section('content')
    <h1>Listagem de usuários</h1>
    <table class="table">

    </table>     <ul type="none">
        @foreach($usuarios as $usuario)
            <li>
                <span>
                    {{ $usuario->name }}
                </span>

                <a href="{{ route('usuarios.mostrar_usuario', ['id' => $usuario->id] )  }}" class="btn btn-primary">
                    Mostrar
                </a>
            </li>
        @endforeach
    </ul>
@endsection

