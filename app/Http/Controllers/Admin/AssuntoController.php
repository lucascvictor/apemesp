<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Menu;

use Apemesp\Apemesp\Repositories\Admin\AssuntoRepository;

use Apemesp\Apemesp\Repositories\Admin\ConfigsRepository;

use Auth;

use Session;

use View;

class AssuntoController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens'],
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

    public function editAssunto($id){

        $assuntoRepository = New AssuntoRepository;
        $assunto = $assuntoRepository->getAssunto($id);

        return view('admin.admin.configs.assuntos.editassunto')->with('assunto', $assunto);
    }


     public function updateAssunto(Request $request, $id){

         $this->validate($request, array(
                'assunto' => 'required|max:255',
                'email' => 'required|max:255',
                ));

        $assuntoRepository = New AssuntoRepository;
        $assuntoRepository->updateAssunto($request, $id);
        $assuntos = $assuntoRepository->getAssuntos();
        $assuntos->setPath('assuntos');
        Session::flash('sucesso', 'O assunto foi atualizado');
         return view('admin.admin.configs.assuntos.showassuntos')
                ->with('assuntos', $assuntos);
    }

     public function storeAssunto(Request $request){

        $this->validate($request, array(
                'assunto' => 'required|max:255',
                'email' => 'required|max:255',
                ));

        $configsRepository = new ConfigsRepository;
        $configsRepository->setAssunto($request->assunto, $request->email);
        unset($configsRepository);
        Session::flash('sucesso', 'O assunto foi adicionado com sucesso!');
        return redirect()->route('show.assuntos');
    }

    public function destroyAssunto($id)
    {
        $assuntoRepository = new AssuntoRepository;
        $assuntoRepository->deleteAssunto($id);
        Session::flash('cuidado', 'O assunto foi removido com sucesso!');
        return redirect()->route('show.assuntos');
    }

}
