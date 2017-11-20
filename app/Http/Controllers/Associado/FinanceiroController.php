<?php

namespace App\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Repositories\Associado\AssociadoRepository;

use App\Apemesp\Repositories\Associado\DadosAcademicosRepository;

use View;

use Auth;

class FinanceiroController extends Controller{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);
        View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav']
        ]);

    }

    public function getIndex()
    {
      $dadosAcademicos = new DadosAcademicosRepository;
        if($this->getIdCadastro() < 5){
             return view('admin.associado.restricao');
        }
        if($this->getIdCadastro() >= 5 ){
         return view('admin.associado.financeiro')->with('cpf', $dadosAcademicos->getCpf($this->getIdUsuario()));
      }
    }


    public function getIdCadastro()
    {
      return Auth::user()->id_cadastro;
    }

    public function getIdUsuario()
    {
      return Auth::user()->id;
    }

}
