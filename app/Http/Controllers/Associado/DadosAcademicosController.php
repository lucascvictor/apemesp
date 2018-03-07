<?php

namespace Apemesp\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Classes\Associado;

use Apemesp\Apemesp\Repositories\Associado\DadosAcademicosRepository;

use Auth;

use Session;

use View;

use DB;

use Input;

class DadosAcademicosController extends Controller{


    public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);
        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);

    }



    public function getDadosAcademicos()
    {
        $id_cadastro = Auth::user()->id_cadastro;
        if ($id_cadastro < 2) {
            return view('admin.associado.restricao');
        }
        if ($id_cadastro >= 2 ) {
            $dadosAcademicos = new DadosAcademicosRepository;
            $id_user = Auth::user()->id;
            $estados = $dadosAcademicos->getEstados();
            $cidades = [];
            $formacoes = $dadosAcademicos->getFormacoes($id_user);
            $categoria = $dadosAcademicos->getCategoriaUsuario($id_user);
            unset($dadosAcademicos);
            return view('admin.associado.formacoesacademicas')
                ->with('estados', $estados)
                ->with('cidades', $cidades)
                ->with('formacoes', $formacoes)
                ->with('categoria', $categoria);
        }

    }


    public function storeDadosAcademicos(Request $request)
    {
        //Validar os dados
            $teste = $this->validate($request, array(
                    'nomeies' => 'required|max:255',
                    'anodeconclusao' => 'required',
                    'id_categoria_formacao' => 'required',
                ));
        $dadosAcademicos = new DadosAcademicosRepository;
        $id_cadastro = Auth::user()->id_cadastro;
        $id_user = Auth::user()->id;
        //Carregando o arquivo do TCC

        $arquivoTcc = $request->file('arquivotcc');
        $arquivoCertificado = $request->file('certificado');

        if ($arquivoTcc != null) { //Verifica se algum arquivo foi enviado

            $cpf = $dadosAcademicos->getCpf(Auth::user()->id);
            $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf;
            $formato = $request->file('arquivotcc')->getClientOriginalExtension();
            $numero = $dadosAcademicos->getUltimoTcc(Auth::user()->id);
            $arquivoTcc =  'tcc' . $numero . "." . $formato;
            $request->file('arquivotcc')->move($pastaDestino, $arquivoTcc);
        }

        //Carregando o arquivo do Certificado

        if ($arquivoCertificado != null) { //Verifica se algum arquivo foi enviado
            $cpf = $dadosAcademicos->getCpf(Auth::user()->id);
            $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf;
            $formato = $request->file('certificado')->getClientOriginalExtension();
            $numero = $dadosAcademicos->getUltimoCertificado(Auth::user()->id);
            $arquivoCertificado =  'certificado' . $numero . "." . $formato;
            $request->file('certificado')->move($pastaDestino, $arquivoCertificado);
        }


        //Salvar no BD os dados academicos e altera o status do cadastro

            $dadosAcademicos->storeDadosAcademicos(Auth::user()->id, $request, $arquivoTcc, $arquivoCertificado);
            $dadosAcademicos->changeCadastro($id_user, $id_cadastro);

        //redirecionar a pagina
            Session::flash('sucesso', 'Seus dados  salvos com sucesso');
            //flash para esta request e put para salvar na sessao
            return redirect()->route('dadosacademicos');
        }


    public function showFormacao($id)
    {
        $dadosAcademicos = new DadosAcademicosRepository;
        $formacao = $dadosAcademicos->getFormacao($id);
        $estados = $dadosAcademicos->getEstados();
        $cidade = $dadosAcademicos->getCidadeEspecifica($formacao->id_cidade);
        return view('admin.associado.showformacao')
                    ->with('formacao', $formacao)
                    ->with('estados', $estados)
                    ->with('cidade', $cidade);

    }

    public function editFormacao($id)
    {
        $dadosAcademicos = new DadosAcademicosRepository;
        $formacao = $dadosAcademicos->getFormacao($id);
        $estados = $dadosAcademicos->getEstados();
        $cidade = $dadosAcademicos->getCidadeEspecifica($formacao->id_cidade);
        unset($dadosAcademicos);
        return view('admin.associado.editformacao')
            ->with('formacao', $formacao)
            ->with('estados', $estados)
            ->with('cidade', $cidade);
    }




    public function updateFormacao(Request $request, $id)
    {
        //Validar os dados
            $teste = $this->validate($request, array(
                    'nomeies' => 'required|max:255',
                    'anodeconclusao' => 'required',
                ));

        $dadosAcademicos = new DadosAcademicosRepository;
        $cpf = $dadosAcademicos->getCpf(Auth::user()->id);
        $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf;


        $arquivoTcc = $request->file('arquivotcc');
        $arquivoCertificado = $request->file('certificado');

        if ($arquivoTcc != null) { //Verifica se algum arquivo foi enviado

            $formato = $request->file('arquivotcc')->getClientOriginalExtension();
            $arquivoTcc =  $dadosAcademicos->verificaTcc($id);

            if ($arquivoTcc == null) {
                $numero = $dadosAcademicos->getUltimoTcc(Auth::user()->id);
                $arquivoTcc =  'tcc' . $numero . "." . $formato;
            }

            $request->file('arquivotcc')->move($pastaDestino, $arquivoTcc);
            $dadosAcademicos->updateArquivoTCC($id, $arquivoTcc);

        }

        //Carregando o arquivo do Certificado

        if ($arquivoCertificado != null) { //Verifica se algum arquivo foi enviado


            $formato = $request->file('certificado')->getClientOriginalExtension();
            $arquivoCertificado =  $dadosAcademicos->verificaCertificado($id);
            if ($arquivoCertificado == null) {
                $numero = $dadosAcademicos->getUltimoCertificado(Auth::user()->id);
                $arquivoCertificado =  'certificado' . $numero . "." . $formato;
            }
            $request->file('certificado')->move($pastaDestino, $arquivoCertificado);
            $dadosAcademicos->updateArquivoCertificado($id, $arquivoCertificado);
        }

           $dadosAcademicos->updateDadosAcademicos($id, $request);


            Session::flash('sucesso', 'Seus dados acadêmicos foram atualizados com sucesso');
            //flash para esta request e put para salvar na sessao

            return redirect()->route('dadosacademicos');
      }

      public function deleteFormacao($id)
      {
        $dadosAcademicos = new DadosAcademicosRepository;
        $dadosAcademicos->deleteDadosAcademicos($id);

      }


}
