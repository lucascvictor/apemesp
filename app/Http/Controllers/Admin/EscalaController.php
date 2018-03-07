<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Menu;

use Apemesp\Apemesp\Repositories\Admin\EscalaRepository;

use Auth;

use Session;

use View;

class EscalaController extends Controller
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
        $escalaRepository = New EscalaRepository;
        $escalas = $escalaRepository->getEscalas();
        $escalas->setPath('escalas');

        unset($escalaRepository);

        return view('admin.admin.configs.escalas.showescalas')->with('escalas', $escalas);

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
