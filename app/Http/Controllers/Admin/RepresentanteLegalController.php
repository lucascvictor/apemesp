<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Admin\RepresentanteLegalRepository;

use Auth;

use Session;

use View;

class RepresentanteLegalController extends Controller
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

   		$representanteRepository = New RepresentanteLegalRepository;
        $representante = $representanteRepository->getRepresentante();

        unset($representanteLegalRepository);

        return view('admin.admin.representantelegal.index')->with('representante',$representante);


    }

    public function addRepresentante(){

        return view('admin.admin.configs.comissoes.addrepresentanteLegal');
    }

    public function editRepresentante($id){

        $representanteLegalRepository = New RepresentanteLegalRepository;
        $representanteLegal = $representanteLegalRepository->getRepresentante();

        return view('admin.admin.representantelegal.edit')->with('representanteLegal', $representanteLegal);
    }


     public function updateRepresentante(Request $request, $id=1){

         $this->validate($request, array(
                'representanteLegal' => 'required|max:255',
                'atribuicoes' => 'required|max:2000',
                ));
        $representanteLegalRepository = New RepresentanteRepository;
        $representanteLegalRepository->updateRepresentante($id, $request);
        Session::flash('sucesso', 'A representanteLegal foi atualizado');
         return redirect()->route('list.comissoes');
    }

  

}
