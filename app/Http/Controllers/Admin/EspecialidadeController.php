<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Admin\EspecialidadeRepository;

use View;

use Session;

use Auth;

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
      
    } else {
      $especialidadeRepository = new EspecialidadeRepository;
      $especialidadeRepository->setEspecialidade($request->especialidade);
      unset($especialidadeRepository);
      Session::flash("sucesso", "A especialidade foi salva com sucesso");
    }
     if(Auth::user()->id_perfil == 1) {
      return redirect()->route('index.especialidade');
     } else { 
       return redirect()->back();
     }
     
  }

  public function edit($id)
  {
    $especialidadeRepository = new EspecialidadeRepository;
    $especialidade = $especialidadeRepository->getEspecialidade($id);
    return view('admin.admin.configs.especialidades.editespecialidade')->with('especialidade', $especialidade);
  }

  public function updateEspecialidade(Request $request)
  {
    $especialidadeRepository = new EspecialidadeRepository;
    $especialidade = $especialidadeRepository->update($request);
    return redirect()->route('index.especialidade');
  }

  public function index()
  {
    $especialidadeRepository = new EspecialidadeRepository;
    $especialidades = $especialidadeRepository->getEspecialidades();

    return view('admin.admin.configs.especialidades.showespecialidades')->with('especialidades', $especialidades);
  }

  public function add()
  {
    return view('admin.admin.configs.especialidades.addespecialidade');
  }

  public function delete($id)
  {
    $especialidadeRepository = new EspecialidadeRepository;
    $especialidade = $especialidadeRepository->delete($id);
    return redirect()->route('index.especialidade');
  }

}
