<?php

namespace App\Http\Controllers\Associado;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Apemesp\Classes\Associado;

use App\Apemesp\Repositories\Associado\DadosAcademicosRepository;

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
          'App\Composers\MenuComposer'  => ['partials.admin._nav']
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
