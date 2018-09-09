<?php

namespace Apemesp\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Apemesp\Http\Requests;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Apemesp\Classes\Associado;

use Apemesp\Apemesp\Repositories\Associado\DadosAcademicosRepository;

use Apemesp\Apemesp\Repositories\Associado\CarteirinhaRepository;

use Apemesp\Apemesp\Repositories\Admin\FinanceiroRepository;

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
    $carteirinhaRepository = new CarteirinhaRepository;
    $financeiroRepository = new FinanceiroRepository;

    $status = $carteirinhaRepository->getStatus($this->getUserId());
    $anuidades = $financeiroRepository->getAssociado($this->getUserId());

      if($status >= 3) {
        return view('admin.associado.carteirinha.index');
      }
      
      foreach($anuidades as $anuidade) {
        if($anuidade->ano == date("Y") && $anuidade->status != 2 && $anuidade->status != 3) {
          return view('admin.associado.restricao');
        } else {
          return view('admin.associado.carteirinha.index');
        }
      }
      
      if(empty($anuidade) || !isset($anuidade) || $anuidade == null) {
        return view('admin.associado.restricao');
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

  public function storeOld(Request $request)
  {
    $carteirinhaRepository = new CarteirinhaRepository;
    
  }
}
