<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Apemesp\FooterRepository;

use Auth;

use Session;

use View;


class FooterController extends Controller
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
        return view('admin.admin.paginas.add.footer');
    }

    public function storeItem(Request $request)
    {
        return redirect()->back();
    }

    public function listFooter()
    {
        $footerRep = new FooterRepository;
        $footer = $footerRep->listAll();
        return view('admin.admin.paginas.list.footer')->with('footer', $footer);
    }

    public function editItem($id)
    {
        $footerRep = new FooterRepository;
        $footer = $footerRep->getItem($id);
        return view('admin.admin.paginas.edit.footer')->with('footer', $footer);
    }


    public function updateItem(Request $request, $id)
    {
        //Validar os dados
            $this->validate($request, array(
                    'link' => 'required|max:255',
                    'imagem' => 'required',
                    ));

            $footerRep = new FooterRepository;
            $footerRep->updateItem($request, $id);
            $imagemAtual = $postRepository->getImage($id);
            $imagem = $this->storeImage($request, $id, $imagemAtual);
            $footerRep->storeImage($id, $imagem);

            Session::flash('sucesso', 'O item do rodapé foi atualizado com sucesso');
            //flash para esta request e put para salvar na sessao
            return redirect()->route('list.footer');
    }
}
