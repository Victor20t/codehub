<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventsController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('/aluno/evento_aluno',['events' => $events]);
    }

    public function indexp(){

        $events = Event::all();

        return view('/professor/eventos_professor',['events' => $events]);
    }

    public function create(){

       return view('coordenador/adicionar_evento_coordenador'); 
    }
}