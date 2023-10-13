<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(){
        return view('/aluno/evento_aluno');
    }

    public function indexp(){
        return view('/professor/eventos_professor');
    }

    public function create(){
        return view('coordenador/adicionar_evento_coordenador'); 
    }
}