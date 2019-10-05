<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Requests;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Apemesp\Repositories\Admin\CarteirinhaRepository;

use Apemesp\Apemesp\Repositories\Admin\AssociadoRepository;

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


    public function index()
    {
        $carteirinhaRespository = new CarteirinhaRepository;
        $associados = $carteirinhaRespository->getAssociados();
        
        unset($carteirinhaRespository);
     
    	return view("admin.admin.carteirinhas.index")->with('associados', $associados);
    }
      
    public function search(Request $request)
    {
        $associadoRepository = new AssociadoRepository;
        $associados = $associadoRepository->search($request);
        unset($associadoRepository);
        return view('admin.admin.carteirinhas.index')->with('associados', $associados);
    }

    public function editCarteirinha($id)
    {
        $carteirinhaRespository = new CarteirinhaRepository;
        $carteirinha = $carteirinhaRespository->getCarteirinha($id);
        return view('admin.admin.carteirinhas.edit')->with('carteirinha', $carteirinha)->with('id_user', $id);
    }

    public function updateCarteirinha(Request $request, $id)
    {
        $carteirinhaRespository = new CarteirinhaRepository;
        $carteirinha = $carteirinhaRespository->updateCarteirinha($request, $id);
        unset($carteirinhaRespository);
        if ($carteirinha) {
            Session::flash("cuidado", "O numero de associado já está em utilização");
            return redirect()->back();
        } else {
            Session::flash("sucesso", "Atualização realizada com sucesso.");
            return redirect()->back();
        }
        
    }

    public function gerarNumero(Request $request)
    {
        $carteirinhaRespository = new CarteirinhaRepository;
        $carteirinha = $carteirinhaRespository->gerarNumero($request);
        return redirect()->back();
    }


}
