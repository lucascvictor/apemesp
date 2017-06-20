<?php

namespace App\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Repositories\Associado\AssociadoRepository;

use App\Apemesp\Repositories\Associado\DadosAcademicosRepository;

use Auth;

use Session;

use View;

use Input;

class AssociadoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

         View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav'] 
        ]);  
         
        
    }

    public function getCidades($idEstado)
    {
       $associado = new AssociadoRepository; 
       $cidades = $associado->getCidades($idEstado);
       unset($associado);
       return response()->json(['cidades' => $cidades]);
    }

    public function getDownload($arquivo)
    {
        $dadosAcademicos = new DadosAcademicosRepository;
        $cpf = $dadosAcademicos->getCpf(Auth::user()->id);
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