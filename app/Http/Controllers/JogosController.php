<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogos;
use Illuminate\Support\Facades\Redirect;

class JogosController extends Controller
{
    public function MostrarHome(){
        return view('homeadm');
    }

    public function MostrarCadastroJogo(){
        return view('cadastrojogo');
    }

    public function CadastrarJogo(Request $request){
        $registros = $request->validate([
            'nomeJogo'=>'string|required',
            'empresaJogo'=>'string|required',
            'plataformaJogo'=>'string|required',
            'lancamentoJogo'=>'date|required'
        ]);

        Jogos::create($registros);
        return Redirect::route('home');
    }

    public function Destroy(Jogos $id){
        $id->delete();
        return Redirect::route('home');
    }

    public function Update(Jogos $id, Request $request){
        $registros = $request->validate([
            'nomeJogo'=>'string|required',
            'empresaJogo'=>'string|required',
            'plataformaJogo'=>'string|required',
            'lancamentoJogo'=>'date|required'
        ]);
        $id->fill($registros);
        $id->save();

        return Redirect::route('home');
    }

    public function MostrarJogoCodigo(Jogos $id){
        return view("alterajogo",['registro'=>$id]);
    }

    public function MostrarJogoNome(Request $request){
        $registros = Jogos::query();
        $registros->when($request->nomeJogo,function($query, $valor){
            $query->where('nomeJogo', 'like', '%'.$valor.'%');
        });
        $todosRegistros = $registros->get();
        return view('listajogo',['registrosJogos'=>$todosRegistros]);
    }
}
