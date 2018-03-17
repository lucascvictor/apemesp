<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Menu;

use Apemesp\Apemesp\Repositories\Admin\ProximidadeRepository;

use Auth;

use Session;

use View;

class ProximidadeController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);


    }


   public function index(){
		$proximidadeRepository = New ProximidadeRepository;

		$proximidades = $proximidadeRepository->getProximidades();

        unset($proximidadeRepository);

        return view('admin.admin.configs.proximidades.showproximidades')->with('proximidades', $proximidades);

    }


    public function addProximidade(){

        return view('admin.admin.configs.proximidades.addproximidade');
    }



}
