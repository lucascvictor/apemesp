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
        unset($assuntoRepository);

        return view('admin.admin.configs.assuntos.showassuntos')->with('assuntos', $assuntos);

    }

    public function indexForum(){

     $assuntoRepository = New AssuntoRepository;
     $forum = $assuntoRepository->getAssuntosForum();
     unset($assuntoRepository);
     return view('admin.admin.configs.assuntosForum.showassuntos')->with('assuntos', $forum);
    }

    public function addAssunto(){

        return view('admin.admin.configs.assuntos.addassunto');
    }

    public function addAssuntoForum(){

        return view('admin.admin.configs.assuntosForum.addassunto');
    }

    public function editAssunto($id){

        $assuntoRepository = New AssuntoRepository;
        $assunto = $assuntoRepository->getAssunto($id);

        return view('admin.admin.configs.assuntos.editassunto')->with('assunto', $assunto);
    }

    public function editAssuntoForum($id){

        $assuntoRepository = New AssuntoRepository;
        $assunto = $assuntoRepository->getAssuntoForum($id);

        return view('admin.admin.configs.assuntosForum.editassunto')->with('assunto', $assunto);
    }


     public function updateAssunto(Request $request, $id){

         $this->validate($request, array(
                'assunto' => 'required|max:255',
                'email' => 'required|max:255',
                ));

        $assuntoRepository = New AssuntoRepository;
        $assuntoRepository->updateAssunto($request, $id);
        $assuntos = $assuntoRepository->getAssuntos();
        Session::flash('sucesso', 'O assunto foi atualizado');
         return view('admin.admin.configs.assuntos.showassuntos')
                ->with('assuntos', $assuntos);
    }


    public function updateAssuntoForum(Request $request, $id){

        $this->validate($request, array(
               'assunto' => 'required|max:255',
               'email' => 'required|max:255',
               ));

       $assuntoRepository = New AssuntoRepository;
       $assuntoRepository->updateAssuntoForum($request, $id);
       $assuntos = $assuntoRepository->getAssuntosForum();
       Session::flash('sucesso', 'O assunto do forum foi atualizado');
        return view('admin.admin.configs.assuntosForum.showassuntos')
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

    public function storeAssuntoForum(Request $request){

        $this->validate($request, array(
                'name' => 'required|max:255',
                ));

        $configsRepository = new ConfigsRepository;
        $configsRepository->setAssuntoForum($request->assunto, $request->email);
        unset($configsRepository);
        Session::flash('sucesso', 'O assunto do forum foi adicionado com sucesso!');
        return redirect()->route('show.assuntos.forum');
    }

    public function destroyAssunto($id)
    {
        $assuntoRepository = new AssuntoRepository;
        $assuntoRepository->deleteAssunto($id);
        Session::flash('cuidado', 'O assunto foi removido com sucesso!');
        return redirect()->route('show.assuntos');
    }

    public function destroyAssuntoForum($id)
    {
        $assuntoRepository = new AssuntoRepository;
        $assuntoRepository->deleteAssuntoForum($id);
        Session::flash('cuidado', 'O assunto do forum foi removido com sucesso!');
        return redirect()->route('show.assuntos.forum');
    }

}
