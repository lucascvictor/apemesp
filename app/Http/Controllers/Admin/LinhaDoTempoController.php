<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Admin\LinhaDoTempoRepository;

use Auth;

use Session;

use View;


class LinhaDoTempoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
			'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
			'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);

    }

    public function addItem()
    {
        return view('admin.admin.paginas.add.linhadotempo');
    }

    public function storeItem(Request $request)
    {
        return redirect()->back();
    }

    public function listTimeLine()
    {
        $linhaDoTempoRep = new LinhaDoTempoRepository;
        $linhaDoTempo = $linhaDoTempoRep->listAll();
        return view('admin.admin.paginas.list.linhadotempo')->with('linhadotempo', $linhaDoTempo);
    }

    public function editItem($id)
    {
        $linhaDoTempoRep = new LinhaDoTempoRepository;
        $linhaDoTempo = $linhaDoTempoRep->getItem($id);
        return view('admin.admin.paginas.edit.linhadotempo')->with('linhadotempo', $linhaDoTempo);
    }

    public function updateItem(Request $request, $id)
    {
        //Validar os dados
            $this->validate($request, array(
                    'ano' => 'required|max:255',
                    'acontecimentos' => 'required',
                    ));

            $linhaDoTempoRep = new LinhaDoTempoRepository;
            $linhaDoTempoRep->updateItem($request, $id);
            
            Session::flash('sucesso', 'O item da linha do tempo foi atualizado com sucesso');
            //flash para esta request e put para salvar na sessao
            return redirect()->route('list.linhadotempo');
    }
}
