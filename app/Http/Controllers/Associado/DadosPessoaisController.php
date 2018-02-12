<?php

namespace Apemesp\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Classes\Associado;

use Apemesp\Apemesp\Repositories\Associado\DadosPessoaisRepository;

use Auth;

use Session;

use View;

use Input;

class DadosPessoaisController extends Controller{


    public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);
        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDadosPessoais()
    {
        $dadosPessoais = new DadosPessoaisRepository;
        $nacionalidades = $dadosPessoais->getNacionalidade();
        $estados = $dadosPessoais->getEstados();
        $cidades = []; //É preciso passar um array vazio para que a váriavel na View seja inicializada

        $id_cadastro = Auth::user()->id_cadastro;

        if($id_cadastro == 1 ){
            return view('admin.associado.dadospessoais')->with('nacionalidades', $nacionalidades)->with('estados', $estados)->with('cidades', $cidades);
        }

        if($id_cadastro > 1){

            $dados = $dadosPessoais->getDadosPessoais(Auth::user()->id);
            $cidade = $dadosPessoais->getCidadeEspecifica($dados[0]->id_cidade);

            return view('admin.associado.showdadospessoais')
            ->with('nacionalidades', $nacionalidades)
            ->with('estados', $estados)
            ->with('cidade', $cidade)
            ->with('dadospessoais', $dados);
        }

    }



    public function storeDadosPessoais(Request $request)
    {
        //Validar os dados
            $this->validate($request, array(
                    'name' => 'required|max:255',
                    'cpf' => 'required',
                    'rg' => 'required',
                    'nascimento' => 'required',
                ));

        $associado = new Associado;
        $verificacao = $associado->verificaCPF($request->cpf);
        unset($associado);

        if ($verificacao == false) {
            //redirecionar a pagina para cuidados com o cpf
            Session::flash('cuidado', 'O CPF é inválido ou já foi cadastrado por outro associado');
            //flash para esta request e put para salvar na sessao
            return redirect()->route('dadospessoais');
        } else {

            //Carregando a foto
            $arquivo = $request->file('foto');

            $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $request->cpf;
            $nomeArquivo = 'foto' . '.' . $request->file('foto')->getClientOriginalExtension();

            $request->file('foto')->move($pastaDestino, $nomeArquivo);

            $dadosPessoais = new DadosPessoaisRepository;

            $dadosPessoais->storeDadosPessoais($request, Auth::user()->id, $nomeArquivo);

            unset($dadosPessoais);

            Session::flash('sucesso', 'Seus dados foram salvos com sucesso');
            //flash para esta request e put para salvar na sessao
            return redirect()->route('dadosacademicos');
        }
    }


    public function fotoUpdate(Request $request, $cpf)
    {

        if ($cpf == null || ($cpf[0] == 0 && $cpf[1] ==0)) {
            return redirect()->back();
        } else {

            if ($request->file('foto') !== null ) {//verifica se a foto foi alterada


            $pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf ;
            $nomeArquivo = 'foto'  . "." . $request->file('foto')->getClientOriginalExtension();

            if ($request->file('foto')->getClientOriginalExtension() !== 'jpg') {
                Session::flash('cuidado', 'O formato da imagem não é válido, por favor selecione um arquivo .jpg');
                return redirect()->back();
            }
            $filename = base_path() . DIRECTORY_SEPARATOR . 'public/files/' . $cpf  . "/" . 'foto' .".jpg";

            if (file_exists($filename)) {
                unlink($filename);
            }

            $request->file('foto')->move($pastaDestino, $nomeArquivo);

            $dadosPessoais = new DadosPessoaisRepository;
            $dadosPessoais->fotoUpdate($cpf);
            unset($dadosPessoais);
            Session::flash('sucesso', 'Sua foto foi atualizada com sucesso');
            return redirect()->back();

            } else {
                  $this->validate($request, array(
                        'foto' => 'required',
                    ));

            }
        }

    }


    public function dadospessoaisUpdate(Request $request, $id)
    {
        $associado = new Associado;
        $verificacao = $associado->verificaCPF($request->cpf, $id);
        unset($associado);

        if($verificacao == false){
            Session::flash('cuidado', 'O CPF é inválido ou já foi cadastrado por outro associado');
            //flash para esta request e put para salvar na sessao
            return redirect()->back();
        } else {

            $dadosPessoais = new DadosPessoaisRepository;
            $dadosPessoais->updateDadosPessoais($request, $id);

            Session::flash('sucesso', 'Seus daos pessoais foram atualizado com sucesso');
            //flash para esta request e put para salvar na sessao
            if (Auth::user()->id_perfil == 1) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('dadospessoais');
            }
        }
    }

}
