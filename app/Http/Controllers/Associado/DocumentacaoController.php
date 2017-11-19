<?php

namespace App\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Repositories\Associado\AssociadoRepository;

use View;

use Auth;

class DocumentacaoController extends Controller{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);
        View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav']
        ]);

    }

    public function getIndex()
    {

      if($this->getIdCadastro() < 4){
           return view('admin.associado.restricao');
      }
      if($this->getIdCadastro() >= 4 ){
          return view('admin.associado.documentacao');
      }
    }


    public function getIdCadastro()
    {
      return Auth::user()->id_cadastro;
    }



}
