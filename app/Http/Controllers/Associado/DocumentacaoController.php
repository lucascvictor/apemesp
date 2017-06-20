<?php

namespace App\Http\Controllers\Associado;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Repositories\Associado\AssociadoRepository;

use View;

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
 
       return view('admin.associado.documentacao');
    }



}