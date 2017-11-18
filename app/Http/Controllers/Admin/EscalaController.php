<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Models\Menu;

use App\Apemesp\Repositories\Admin\EscalaRepository;

use Auth;

use Session;

use View;

class EscalaController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav']
        ]);

    }


   public function index(){
   			$escalaRepository = New EscalaRepository;

				$escalas = $escalaRepository->getEscalas();
				$escalas->setPath('escalas');


        unset($escalaRepository);

        return view('admin.admin.configs.escalas.showescalas')
				->with('escalas', $escalas);

    }


  public function addEscala(){

      return view('admin.admin.configs.escalas.addescala');
  }

  public function storeEscala(Request $request){
    $this->validate($request, array(
            'escala' => 'required|max:500',
            ));

    $escalaRepository = new EscalaRepository;
    $escalaRepository->storeEscala($request->escala);
    unset($escalaRepository);
    return redirect()->back();
}

}
