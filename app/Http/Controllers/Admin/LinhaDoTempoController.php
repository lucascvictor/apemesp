<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Menu;

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

    public function addItem(Request $request)
    {
        
    }

    public function listTimeLine()
    {
        return view('admin.admin.paginas.list.linhadotempo');
    }
}
