<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Models\Menu;

use App\Apemesp\Repositories\Admin\AssuntoRepository;

use Auth;

use Session;

use View;

class AssuntoController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav']
        ]);

    }


   public function index(){

   			$assuntoRepository = New AssuntoRepository;
        $assuntos = $assuntoRepository->getAssuntos();

        $assuntos->setPath('assuntos');

        unset($assuntoRepository);

        return view('admin.admin.configs.assuntos.showassuntos')
				->with('assuntos', $assuntos);

    }

    public function addAssunto(){

        return view('admin.admin.configs.assuntos.addassunto');
    }

     public function setAssunto(Request $request){

        $this->validate($request, array(
                'assunto' => 'required|max:255',
                'email' => 'required|max:255',
                ));

        $configsRepository = new ConfigsRepository;
        $configsRepository->setAssunto($request->assunto, $request->email);
        unset($configsRepository);
        return redirect()->route('show.assuntos');
    }

}
