<?php

namespace Apemesp\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Apemesp\Http\Requests;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Apemesp\Classes\Associado;

use Apemesp\Apemesp\Repositories\Associado\DadosAcademicosRepository;

use Apemesp\Apemesp\Repositories\Associado\CarteirinhaRepository;

use Apemesp\Apemesp\Repositories\Admin\FinanceiroRepository;

use Apemesp\Apemesp\Repositories\Admin\AssociadoRepository;

use Apemesp\Apemesp\Repositories\Admin\RepresentanteLegalRepository;

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
    dd($request);
    $carteirinhaRepository = new CarteirinhaRepository; 
  }

  public function getCertificado()
  {
    $associadoRepository = new AssociadoRepository;
    $repRepository = new RepresentanteLegalRepository;
    $carteirinhaRepository = new CarteirinhaRepository; 
    $numeroCarteirinha = $carteirinhaRepository->getNumero($this->getUserId());
    $associado = $associadoRepository->getAssociado($this->getUserId()); 
    $representante = $repRepository->getRepresentante();

    return view("admin.associado.certificado.index")
    ->with('associado', $associado)
    ->with('numeroCarteirinha', $numeroCarteirinha)
    ->with('representante', $representante);
  }
}
