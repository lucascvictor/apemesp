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
}
