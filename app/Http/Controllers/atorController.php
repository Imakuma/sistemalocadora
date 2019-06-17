<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;

class atorController extends Controller
{
    //
    public function index(request $request){
        if ($request->isMethod('GET')){
            $todosAtores = Ator::all();
            return view('ator',["todosAtores"=>$todosAtores]);
        }
    }

    public function create(request $request){
        if($request->isMethod('GET')){
            return view("cadastroAtor");
        }

        $novoAtor = new Ator();
        $novoAtor->primeiro_nome = $request->primeiroNome;
        $novoAtor->ultimo_nome = $request->segundoNome;
        $novoAtor->ultima_atualizacao = date('y-m-d h:m');
        $resultado =  $novoAtor->save();


        return view ("cadastroAtor",["resultado"=>$resultado]);
    }
}
