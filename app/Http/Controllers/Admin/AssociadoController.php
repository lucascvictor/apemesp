<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Admin\AssociadoRepository;

use Session;

use View;


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
        return view("admin.admin.associados.showperfil")->with("associado", $associado);
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

}
