<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Admin\EspecialidadeRepository;



class EspecialidadeController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);

    }
  
  public function storeEspecialidade(Request $request){
    
    if ($request->especialidade == null) {
      Session::flash("cuidado", "Nenhuma informação inserida");
      return redirect()->back();
    }
     
     $especialidadeRepository = new EspecialidadeRepository;
     $especialidadeRepository->setEspecialidade($request->especialidade);
     unset($especialidadeRepository);
     return redirect()->back();
 }

}
