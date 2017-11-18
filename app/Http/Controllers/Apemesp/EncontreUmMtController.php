<?php

namespace App\Http\Controllers\Apemesp;

use App\Http\Controllers\Controller;
use App\Apemesp\Repositories\Apemesp\EncontreUmMtRepository;
use App\Apemesp\Repositories\Admin\EspecialidadeRepository;
use App\Apemesp\Repositories\Admin\EscalaRepository;
use App\Apemesp\Repositories\Admin\ProximidadeRepository;
use View;

class EncontreUmMtController extends Controller{

	public function __construct()
    {

         View::composers([
            'App\Composers\MaisVistosComposer'  => ['partials._sidebar']
        ]);

         View::composers([
            'App\Composers\PropagandasComposer'  => ['partials._sidebar']
        ]);
     }

    public function getIndex(){
    	$especialidades = new EspecialidadeRepository;
			$escalas = new EscalaREpository;
			$proximidades = new ProximidadeRepository;
			$pesquisa = 0;
        return view('paginas.encontreummt')
				->with('especialidades', $especialidades->getEspecialidades())
				->with('proximidades', $proximidades->getProximidades())
				->with('escalas', $escalas->getEscalas())
				->with('pesquisa', $pesquisa);
    }

		public function search(Request $request)
		{
				$encontreummtRepository = new EncontreUmMtRepository;
				$mts = $encontreummtRepository->search($request);
				$path = "search?q=" . $request->q;
				$mts->setPath($path);

				unset($encontreummtRepository);
				return view('admin.admin.associados.associados')->with('mts', $mts);
		}

}
