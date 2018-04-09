<?php
namespace Apemesp\Http\Controllers\Admin;

use Apemesp\Http\Requests;

use Apemesp\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Apemesp\Apemesp\Repositories\Admin\FinanceiroRepository;

use Apemesp\Apemesp\Repositories\Admin\AssociadoRepository;

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
        unset($financeiroRespository);
     
    	return view('admin.admin.financeiro.financeiro')->with('associados', $associados);
    }

    public function indexDadosBancarios()
    {
        $financeiroRespository = new FinanceiroRepository;
        $dadosBancarios = $financeiroRespository->getDadosBancarios();
        unset($financeiroRespository);
     
    	return view('admin.admin.financeiro.dadosbancarios.index')->with('dadosbancarios', $dadosBancarios);
    }

    public function search(Request $request)
    {
        $associadoRepository = new AssociadoRepository;
        $associados = $associadoRepository->search($request);
        
        unset($associadoRepository);
        return view('admin.admin.financeiro.financeiro')->with('associados', $associados);
    }

    public function getAssociado($id)
    {
        $financeiroRespository = new FinanceiroRepository;
        $associado = $financeiroRespository->getAssociado($id);
        return view('admin.admin.financeiro.associado')->with('associado',$associado);
    }

    public function avaliarLancamento($id, $ano)
	{
        $financeiroRespository = new FinanceiroRepository;
        $associado = $financeiroRespository->getLancamento($id, $ano);
		return view('admin.admin.financeiro.avaliacao')->with('associado',$associado);
	}
}

