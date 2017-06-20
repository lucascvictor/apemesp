<?php

namespace App\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Classes\Associado;

use App\Apemesp\Models\Nacionalidade;

use App\Apemesp\Models\Cidade;

use App\Apemesp\Models\Estado;

use App\Apemesp\Models\User;

use App\Apemesp\Models\DadosPessoais;

use App\Apemesp\Models\FormacoesAcademicas;

use App\Apemesp\Models\UsuarioCategoria;

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
        $id_user = Auth::user()->id;
         $estados = Estado::orderby('nome', 'asc')->get();
         $cidades = [];
         
       if($id_cadastro < 3){
            return view('admin.associado.restricao');
       }
        if($id_cadastro >= 3 ){
            return view('admin.associado.dadosprofissionais')->with('estados', $estados)->with('cidades', $cidades);
        }
        

    }


}