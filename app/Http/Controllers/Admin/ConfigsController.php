<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Menu;

use Apemesp\Apemesp\Repositories\Admin\ConfigsRepository;

use Auth;

use Session;

use View;

class ConfigsController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav']
        ]);

    }


   public function index(){
   		$configsRepository = New ConfigsRepository;
        $assuntos = $configsRepository->getAssuntos();
        $assuntos->setPath('configs');
        unset($configsRepository);
        $id_perfil = Auth::user()->id_perfil;
        return view('admin.admin.configs.configuracoes')->with('assuntos', $assuntos);
    }

    public function getAssunto(){



        return view('admin.admin.configs.addassunto');
    }

     public function setAssunto(Request $request){

        $this->validate($request, array(
                'assunto' => 'required|max:255',
                'email' => 'required|max:255',
                ));

        $configsRepository = new ConfigsRepository;
        $configsRepository->setAssunto($request->assunto, $request->email);
        unset($configsRepository);
        return redirect()->route('configs');
    }

}
