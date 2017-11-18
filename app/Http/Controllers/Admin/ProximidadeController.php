<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Models\Menu;

use App\Apemesp\Repositories\Admin\ProximidadeRepository;

use Auth;

use Session;

use View;

class ProximidadeController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav']
        ]);

    }


   public function index(){
   			$proximidadeRepository = New ProximidadeRepository;

				$proximidades = $proximidadeRepository->getProximidades();
				$proximidades->setPath('proximidades');


        unset($proximidadeRepository);

        return view('admin.admin.configs.proximidades.showproximidades')

				->with('proximidades', $proximidades);

    }


        public function addProximidade(){

            return view('admin.admin.configs.proximidades.addproximidade');
        }



}
