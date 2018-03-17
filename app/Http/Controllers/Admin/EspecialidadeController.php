<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Admin\EspecialidadeRepository;

use View;

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
     Session::flash("sucesso", "A especialidade foi salva com sucesso");
     return redirect()->back();
  }

  public function index()
  {
    $especialidadeRepository = new EspecialidadeRepository;
    $especialidades = $especialidadeRepository->getEspecialidades();

    return view('admin.admin.configs.especialidades.showespecialidades')->with('especialidades', $especialidades);
  }

}
