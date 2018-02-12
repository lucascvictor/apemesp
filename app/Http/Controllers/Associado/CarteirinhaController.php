<?php

namespace Apemesp\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Apemesp\Http\Requests;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Apemesp\Classes\Associado;

use Apemesp\Apemesp\Repositories\Associado\DadosAcademicosRepository;

use Auth;

use Session;

use View;

use DB;

class CarteirinhaController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth', ['except' => 'logout']);
      View::composers([
          'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
          'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
      ]);

  }

  public function getIndex()
  {
    $dadosAcademicos = new DadosAcademicosRepository;
      if($this->getIdCadastro() < 6){
           return view('admin.associado.restricao');
      }
      if($this->getIdCadastro() >= 6 ){
       return view('admin.associado.carteirinha')->with('cpf', $dadosAcademicos->getCpf($this->getIdUsuario()));
    }
  }

  public function getIdCadastro()
  {
    return Auth::user()->id_cadastro;
  }

  public function getUserId()
  {
    return Auth::user()->id;
  }
}
