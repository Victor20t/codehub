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

Route::get('/aluno/selecionar_turma', function () {
    return view('/aluno/selecionar_turma_aluno');
});

Route::get('/aluno/boletim', function () {
    return view('/aluno/boletim_aluno');
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

Route::get('/professor/horario', function () {
    return view('/professor/horario_professor');
});

Route::get('/professor/selecionar_turma_boletim', function () {
    return view('/professor/boletim/selecionar_turma_add_nota_professor');
});

Route::get('/professor/add_boletim', function () {
    return view('/professor/boletim/add_boletim_professor');
});

Route::get('/professor/analisar_turma', function () {
    return view('/professor/analisar_turma_professor');
});

Route::get('/professor/selecionar_turma_chamada', function () {
    return view('/professor/realizar_chamada/selecionar_turma_realizar_chamada_professor');
});

Route::get('/professor/realizar_chamada', function () {
    return view('/professor/realizar_chamada/realizar_chamada_professor');
});

Route::get('/professor/eventos', function () {
    return view('/professor/eventos_professor');
});

Route::get('/professor/usuario', function () {
    return view('/professor/usuario_professor');
});

Route::get('/cordenador', function () {
    return view('cordenador/dashboard_cordenador');
});

Route::get('/cordenador/add_evento', function () {
    return view('cordenador/adicionar_evento_cordenador');
});