<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Menu;

use Apemesp\Apemesp\Repositories\Admin\ProximidadeRepository;

use Auth;

use Session;

use View;

class ProximidadeController extends Controller
{


	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
            'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
            'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);


    }


   public function index(){
		$proximidadeRepository = New ProximidadeRepository;

		$proximidades = $proximidadeRepository->getProximidades();

        unset($proximidadeRepository);

        return view('admin.admin.configs.proximidades.showproximidades')->with('proximidades', $proximidades);

    }


    public function add(){

        return view('admin.admin.configs.proximidades.addproximidade');
    }

    public function store(Request $request)
    {
        if ($request->proximidade == null) {
            Session::flash("cuidado", "Nenhuma informação inserida");
            
        } else {
            $proximidadeRepository = new ProximidadeRepository;
            $proximidadeRepository->setProximidade($request->proximidade);
            unset($proximidadeRepository);
            Session::flash("sucesso", "A proximidade foi salva com sucesso");
        }
            
            return redirect()->route('index.proximidade');
    }
    
      public function edit($id)
      {
        $proximidadeRepository = new ProximidadeRepository;
        $proximidade = $proximidadeRepository->getProximidade($id);
        return view('admin.admin.configs.proximidades.editproximidade')->with('proximidade', $proximidade);
      }
    
      public function update(Request $request)
      {
        $proximidadeRepository = new ProximidadeRepository;
        $proximidade = $proximidadeRepository->update($request);
        return redirect()->route('index.proximidade');
      }

      public function delete($id)
      {
        $proximidadeRepository = new ProximidadeRepository;
        $proximidade = $proximidadeRepository->delete($id);
        return redirect()->route('index.proximidade');
      }



}
