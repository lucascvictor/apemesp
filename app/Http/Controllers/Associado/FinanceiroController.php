<?php

namespace Apemesp\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Associado\AssociadoRepository;

use Apemesp\Apemesp\Repositories\Associado\DadosAcademicosRepository;

use Apemesp\Apemesp\Repositories\Associado\FinanceiroRepository;

use View;

use Session;

use Auth;

class FinanceiroController extends Controller{

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
      $financeiro = new FinanceiroRepository;

        if($this->getIdCadastro() < 5){
             return view('admin.associado.restricao');
        }
        if($this->getIdCadastro() >= 5 ){

         return view('admin.associado.financeiro')
         ->with('cpf', $dadosAcademicos->getCpf($this->getIdUsuario()))
         ->with('anuidades', $financeiro->getAnuidades($this->getIdUsuario()))
         ->with('dadosbancarios', $financeiro->getDadosBancarios());
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

    public function storeAnuidade(Request $request)
    {
      $financeiroRespository = new FinanceiroRepository;
      $anuidade = $financeiroRespository->storeAnuidade($request);
      if ($anuidade) {
          Session::flash('sucesso', 'Sua anuidade foi salva com sucesso');
      } else {
          Session::flash('cuidado', 'Verifique o arquivo ou o ano deste comprovante, sua anuidade não foi salva.');
      }
      return redirect()->back(); 
    }

}
