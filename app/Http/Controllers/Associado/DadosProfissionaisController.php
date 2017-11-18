<?php

namespace App\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Classes\Associado;

use App\Apemesp\Repositories\Associado\DadosProfissionaisRepository;

use Auth;

use Session;

use View;

use DB;

use Input;

class DadosProfissionaisController extends Controller{


    public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav']
        ]);

    }



    public function getDadosProfissionais()
    {


      $id_cadastro = Auth::user()->id_cadastro;

      $dadosProfissionais = new DadosProfissionaisRepository;

       if($id_cadastro < 3){
            return view('admin.associado.restricao');
       }
        if($id_cadastro >= 3 ){
            return view('admin.associado.dadosprofissionais')
            ->with('especialidades', $dadosProfissionais->getEspecialidades())
            ->with('proximidades', $dadosProfissionais->getProximidades())
            ->with('escalas', $dadosProfissionais->getEscalas());
        }
    }



}
