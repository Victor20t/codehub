<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/aluno', function () {
    return view('/aluno/dashboard_aluno');
});

Route::get('/aluno/boletim', function () {
    return view('/aluno/boletim_aluno');
});

Route::get('/aluno/boletim_2', function () {
    return view('/aluno/boletim_2_aluno');
});

Route::get('/aluno/horario', function () {
    return view('/aluno/horario_aluno');
});

Route::get('/aluno/cardapio', function () {
    return view('/aluno/cardapio_aluno');
});

Route::get('/aluno/evento', function () {
    return view('/aluno/evento_aluno');
});

Route::get('/aluno/blocodenotas', function () {
    return view('/aluno/blocodenotas_aluno');
});

Route::get('/aluno/usuario', function () {
    return view('/aluno/usuario_aluno');
});

Route::get('/professor', function () {
    return view('/professor/dashboard_professor');
});

Route::get('/cordenador', function () {
    return view('cordenador/dashboard_cordenador');
});

Route::get('/cordenador/add_evento', function () {
    return view('cordenador/adicionar_evento_cordenador');
});