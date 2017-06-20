<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Apemesp\Repositories\Admin\FinanceiroRepository;

use Auth;

use View;

class PaginasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('auth', ['except' => 'logout']);
    	
        View::composers([
            'App\Composers\MenuComposer'  => ['partials.admin._nav'] 
        ]);

        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function addLiteratura()
    {
        $pagina = new FinanceiroRepository;
    	return view('admin.admin.paginas.add.literatura')->with("pagina", $pagina->busca("asd"));
    }

  
}

