<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Repositories\Admin\EspecialidadeRepository;



class EspecialidadeController extends Controller
{

  public function storeEspecialidade(Request $request){

     $this->validate($request, array(
             'especialidade' => 'required|max:255',
             ));

     $especialidadeRepository = new EspecialidadeRepository;
     $especialidadeRepository->setEspecialidade($request->especialidade);
     unset($especialidadeRepository);
     return redirect()->back();
 }

}
