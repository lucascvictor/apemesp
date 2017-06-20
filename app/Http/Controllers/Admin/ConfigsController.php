<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Apemesp\Models\Menu;

use App\Apemesp\Repositories\Admin\ConfigsRepository;

use Auth;

use Session;

use View;

class ConfigsController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav']
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
    	
        $id_perfil = Auth::user()->id_perfil;
       
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