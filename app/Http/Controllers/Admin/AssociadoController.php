<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Repositories\Admin\AssociadoRepository;

use Auth;

use Session;

use View;

use DB;

class AssociadoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

         View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav'] 
        ]);  
         
        
    }

    public function index()
    {
        $associadoRepository = new AssociadoRepository;
        $associados = $associadoRepository->getAssociadoIndex();
        $associados->setPath('associados');
        unset($adminRepository);
        return view('admin.admin.associados.associados')->with('associados', $associados);
    }

    public function editPerfil($id)
    {
        $associadoRepository = new AssociadoRepository;
        $associado = $associadoRepository->getAssociado($id);
        $nacionalidades = $associadoRepository->getNacionalidades();
        $estados = $associadoRepository->getEstados();
        $cidades = $associadoRepository->getCidades();
        unset($associadoRepository);
        return view("admin.admin.associados.editperfil")->with('associado', $associado)->with("nacionalidades", $nacionalidades)->with("estados", $estados)->with("cidades", $cidades);
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
        $path = "search?q=" . $request->q;
        $associados->setPath($path);

        unset($postRepository);
        return view('admin.admin.associados.associados')->with('associados', $associados);
    }

}