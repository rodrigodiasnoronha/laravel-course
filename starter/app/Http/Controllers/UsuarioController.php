<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Response;

class UsuarioController extends Controller
{
    public function index() {
        $usuarios = User::all();

        return view('usuarios.index', compact('usuarios'));
    }

    public function show(Response $response, Request $request, $id) {
        $usuario = User::query()->find($id);

        return view('usuarios.show', compact('id', 'usuario'));
    }
}
