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
    return view('dashboard_aluno');
});

Route::get('/aluno/boletim', function () {
    return view('boletim_aluno');
});

Route::get('/professor', function () {
    return view('dashboard_professor');
});

Route::get('/cordenador', function () {
    return view('dashboard_cordenador');
});

