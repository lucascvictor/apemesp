<?php

namespace Apemesp\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Associado\DadosAcademicosRepository;

use Apemesp\Apemesp\Repositories\Associado\DocumentacaoRepository;

use Apemesp\Apemesp\Repositories\Associado\FinanceiroRepository;

use View;

use Auth;

use Session;

class DocumentacaoController extends Controller{

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

      if($this->getIdCadastro() < 4){
           return view('admin.associado.restricao');
      }
      if($this->getIdCadastro() >= 4 ){
          $dadosAcademicos = new DadosAcademicosRepository;
          return view('admin.associado.documentacao')->with('cpf', $dadosAcademicos->getCpf($this->getIdUsuario()));
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

    public function storeRg(Request $request)
    {
      $teste = $this->validate($request, array(
              'rg' => 'required|max:2550',
          ));
      //Carregando o rg
      $dadosAcademicos = new DadosAcademicosRepository;
      $arquivo = $request->file('rg');
      $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadosAcademicos->getCpf($this->getIdUsuario());
      $nomeArquivo = 'rg' . '.' . $request->file('rg')->getClientOriginalExtension();
      if (file_exists($pastaDestino . $nomeArquivo)) {
        unlink($pastaDestino . $nomeArquivo);
      }
      $request->file('rg')->move($pastaDestino, $nomeArquivo);
      return redirect()->back();

    }

    public function storeCpf(Request $request)
    {
      $teste = $this->validate($request, array(
              'cpf' => 'required|max:2550',
          ));
      $dadosAcademicos = new DadosAcademicosRepository;
      $arquivo = $request->file('rg');
      $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadosAcademicos->getCpf($this->getIdUsuario());
      $nomeArquivo = 'cpf' . '.' . $request->file('cpf')->getClientOriginalExtension();
      if (file_exists($pastaDestino . $nomeArquivo)) {
        unlink($pastaDestino . $nomeArquivo);
      }
      $request->file('cpf')->move($pastaDestino, $nomeArquivo);
      return redirect()->back();
    }

    public function storeCnh(Request $request)
    {
      $teste = $this->validate($request, array(
              'cnh' => 'required|max:2550',
          ));
      $dadosAcademicos = new DadosAcademicosRepository;
      $arquivo = $request->file('rg');
      $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadosAcademicos->getCpf($this->getIdUsuario());
      $nomeArquivo = 'cnh' . '.' . $request->file('cnh')->getClientOriginalExtension();
      if (file_exists($pastaDestino . $nomeArquivo)) {
        unlink($pastaDestino . $nomeArquivo);
      }
      $request->file('cnh')->move($pastaDestino, $nomeArquivo);
      return redirect()->back();
    }


    public function storeComprovante(Request $request)
    {
      $teste = $this->validate($request, array(
              'cnh' => 'required|max:2550',
          ));
      $dadosAcademicos = new DadosAcademicosRepository;
      $arquivo = $request->file('rg');
      $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $dadosAcademicos->getCpf($this->getIdUsuario());
      $nomeArquivo = 'comprovante_e' . '.' . $request->file('cnh')->getClientOriginalExtension();
      if (file_exists($pastaDestino . $nomeArquivo)) {
        unlink($pastaDestino . $nomeArquivo);
      }
      $request->file('cnh')->move($pastaDestino, $nomeArquivo);
      return redirect()->back();
    }


    public function updateDocumentacao(Request $request)
    {
        $documentacao = new DocumentacaoRepository;
        $dadosAcademicos = new DadosAcademicosRepository;
        $financeiro = new FinanceiroRepository;

        if ($request->rg == 1 || $request->cpf == 1 || $request->cnh == 1) {
          $documentacao->storeDocumentacao($request->rg, $request->cpf, $request->cnh, $this->getUserId(), $request->comprovante_e);
          $documentacao->changeCadastro($this->getUserId(), $this->getUserCadastro());
          return view('admin.associado.financeiro')
          ->with('cpf', $dadosAcademicos->getCpf($this->getUserId()))
          ->with('anuidades', $financeiro->getAnuidades($this->getUserId()))
          ->with('dadosbancarios', $financeiro->getDadosBancarios());
          Session::flash('sucesso','Documentação confirmada');
        }
        Session::flash('cuidado','Nenhum documento com foto foi enviado');

    }


    public function getUserCadastro()
    {
      return Auth::user()->id_cadastro;
    }

    public function getUserId()
    {
      return Auth::user()->id;
    }



}
