<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Menu;

use Apemesp\Apemesp\Repositories\Admin\ValidacaoCadastralRepository;

use Apemesp\Apemesp\Repositories\Associado\DocumentacaoRepository;

use Auth;

use Session;

use View;

class ValidacaoCadastralController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);

    }

     public function status(Request $request){

        $documentacao = new DocumentacaoRepository;
        $validacao = new ValidacaoCadastralRepository;
        $documentacao->changeCadastro($request->id, $request->validacao);

        Session::flash('sucesso', 'O assunto foi adicionado com sucesso!');
        return redirect()->route('show.assuntos');
    }

    public function destroyAssunto($id)
    {
        $assuntoRepository = new AssuntoRepository;
        $assuntoRepository->deleteAssunto($id);
        Session::flash('cuidado', 'O assunto foi removido com sucesso!');
        return redirect()->route('show.assuntos');
    }

}
