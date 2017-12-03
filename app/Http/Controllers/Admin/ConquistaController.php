<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Menu;

use Apemesp\Apemesp\Repositories\Admin\ConquistaRepository;

use Apemesp\Apemesp\Repositories\Admin\ConfigsRepository;

use Auth;

use Session;

use View;

class ConquistaController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav']
        ]);

    }


    public function addConquista()
    {
    	return view('admin.admin.paginas.add.conquista');
    }

    public function listConquista()
    {
			$repository = new ConquistaRepository;
			$conquistas = $repository->listAll();
			return view('admin.admin.paginas.list.conquista')->with('conquistas', $conquistas);
    }

    public function storeConquista(Request $request)
    {


      $repository = new ConquistaRepository;
      $id = $repository->store($request);
			Session::flash('sucesso', 'A conquista foi salva com sucesso');
      return redirect()->route('list.conquista');
    }


    public function destroyConquista($id)
    {
			$repository = new ConquistaRepository;
			$repository->destroy($id);
			return redirect()->back();
    }

		public function editConquista($id)
		{
			$repository = new ConquistaRepository;
			$conquista = $repository->getConquista($id);
			return view('admin.admin.paginas.edit.conquista')->with('conquista', $conquista);
		}

		public function updateConquista(Request $request, $id)
		{

			$repository = new ConquistaRepository;
			$repository->update($request, $id);
			Session::flash('sucesso', 'As alterações foram armazenadas com sucesso');
			return redirect()->route('list.conquista');
		}

}
