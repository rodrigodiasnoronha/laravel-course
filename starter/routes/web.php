<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Usuario rotas
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.listar');
Route::get('/usuarios/{id}', [UsuarioController::class, 'show'])->name('usuarios.mostrar_usuario');
