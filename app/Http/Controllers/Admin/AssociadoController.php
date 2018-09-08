<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Admin\AssociadoRepository;

use Apemesp\Apemesp\Repositories\Associado\DadosPessoaisRepository;

use Session;

use View;

use Response;


class AssociadoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

         View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens'],
        ]);

    }

    public function index()
    {
        $associadoRepository = new AssociadoRepository;
        $associados = $associadoRepository->getAssociadoIndex();
        unset($adminRepository);
        return view('admin.admin.associados.associados')->with('associados', $associados);
    }

    public function editPerfil($id)
    {
        $associadoRepository = new AssociadoRepository;
        $associado = $associadoRepository->getAssociado($id);
        $nacionalidades = $associadoRepository->getNacionalidades();
        $estados = $associadoRepository->getEstados();
        $cidade = $associadoRepository->getCidades($associado->id_cidade);
        unset($associadoRepository);
        return view("admin.admin.associados.editperfil")->with('associado', $associado)->with("nacionalidades", $nacionalidades)->with("estados", $estados)->with("cidade", $cidade);
    }

    public function getPerfil($id)
    {
        $associadoRepository = new AssociadoRepository;
        $associado = $associadoRepository->getAssociado($id);
        $dadosacademicos = $associadoRepository->getDadosAcademicos($id);
        $dadosprofissionais = $associadoRepository->getDadosProfissionais($id);
        return view("admin.admin.associados.showperfil")
        ->with("associado", $associado)
        ->with("dadosacademicos", $dadosacademicos)
        ->with("dadosprofissionais", $dadosprofissionais);
    }

    public function search(Request $request)
    {
        $associadoRepository = new AssociadoRepository;
        $associados = $associadoRepository->search($request);

        unset($associadoRepository);
        return view('admin.admin.associados.associados')->with('associados', $associados);
    }

    public function orderByUpdate()
    {
        $associadoRepository = new AssociadoRepository;
        $associados = $associadoRepository->orderByUpdate();
        return view('admin.admin.associados.associados')->with('associados', $associados);
    }

    public function getDownload($cpf, $arquivo)
    {
        $dadosPessoais = new DadosPessoaisRepository;
        if (strlen($cpf) <=3 ) {
            $cpf = $dadosPessoais->getCpf($cpf);
            $cpf = $cpf[0]->cpf;
        }
        $file= public_path(). "/files/" . $cpf . "/" . $arquivo;
        $headers = array('Content-Type: application/pdf',);
        if (file_exists($file)) {
          return Response::download($file, 'arquivo.pdf', $headers);
        } else {
          Session::flash('cuidado','Arquivo não encontrado para download');
          return redirect()->back();
        }
    }

}
