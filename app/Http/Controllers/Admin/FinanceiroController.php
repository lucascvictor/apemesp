<?php
namespace Apemesp\Http\Controllers\Admin;

use Apemesp\Http\Requests;

use Apemesp\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Apemesp\Apemesp\Repositories\Admin\FinanceiroRepository;

use View;

class FinanceiroController extends Controller
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
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'] ,
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);

        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $financeiroRespository = new FinanceiroRepository;
        $associados = $financeiroRespository->getAssociados();
        $associados->setPath('usuarios');
        unset($financeiroRespository);
     
    	return view('admin.admin.financeiro.financeiro')->with('associados', $associados);
    }

    public function busca(Request $request)
    {
        $financeiroRepository = new FinanceiroRepository;
        $posts = $financeiroRepository->busca($request->associado);
        unset($financeiroRepository);
        return view('blog.posts', compact('posts'));
    }

    public function getAssociado($id)
    {
        return $id;
    }
}

