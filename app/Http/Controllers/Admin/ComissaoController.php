<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Menu;

use Apemesp\Apemesp\Repositories\Admin\ComissaoRepository;

use Apemesp\Apemesp\Repositories\Admin\ConfigsRepository;

use Auth;

use Session;

use View;

class ComissaoController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav']
        ]);

    }


   public function index(){

   		$comissaoRepository = New ComissaoRepository;
        $comissoes = $comissaoRepository->getComissoes();

        $comissoes->setPath('comissoes');

        unset($comissaoRepository);

        return view('admin.admin.configs.comissoes.showcomissoes')
				->with('comissoes', $comissoes);

    }

    public function addComissao(){

        return view('admin.admin.configs.comissoes.addcomissao');
    }

    public function listComissoes(){
        $comissaoRepository = New ComissaoRepository;
        $comissoes = $comissaoRepository->list();
        return view('admin.admin.configs.comissoes.listcomissoes')->with('comissoes', $comissoes);
    }

    public function editComissao($id){

        $comissaoRepository = New ComissaoRepository;
        $comissao = $comissaoRepository->getComissao($id);

        return view('admin.admin.configs.comissoes.editcomissao')->with('comissao', $comissao);
    }


     public function updateComissao(Request $request, $id){

         $this->validate($request, array(
                'comissao' => 'required|max:255',
                'email' => 'required|max:255',
                ));

        $comissaoRepository = New ComissaoRepository;
        $comissaoRepository->updateComissao($request, $id);
        $comissoes = $comissaoRepository->getComissoes();
        $comissoes->setPath('comissoes');
        Session::flash('sucesso', 'O comissao foi atualizado');
         return view('admin.admin.configs.comissoes.showcomissoes')
                ->with('comissoes', $comissoes);
    }

     public function storeComissao(Request $request){

        $comissaoRepository = New ComissaoRepository;
        $id = $comissaoRepository->store($request->comissao, $request->atribuicoes);
        unset($configsRepository);
        if (empty($id)) {
            Session::flash('cuidado', 'Algo aconteceu e a comissão não foi salva!');
            return redirect()->route('show.comissoes');
        } else {
            Session::flash('sucesso', 'O comissao foi adicionada com sucesso!');
            return redirect()->route('list.comissoes');
        }
    }

    public function destroyComissao($id)
    {
        $comissaoRepository = new ComissaoRepository;
        $comissaoRepository->deleteComissao($id);
        Session::flash('cuidado', 'O comissao foi removido com sucesso!');
        return redirect()->route('show.comissoes');
    }

    public function getComissao($id)
    {
        
    }

}
