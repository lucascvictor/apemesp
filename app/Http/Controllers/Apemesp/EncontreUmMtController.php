<?php

namespace Apemesp\Http\Controllers\Apemesp;

use Apemesp\Http\Controllers\Controller;
use Apemesp\Apemesp\Repositories\Apemesp\EncontreUmMtRepository;
use Apemesp\Apemesp\Repositories\Admin\EspecialidadeRepository;
use Apemesp\Apemesp\Repositories\Admin\EscalaRepository;
use Apemesp\Apemesp\Repositories\Admin\ProximidadeRepository;
use View;

class EncontreUmMtController extends Controller{

	public function __construct()
    {

         View::composers([
            'Apemesp\Composers\MaisVistosComposer'  => ['partials._sidebar']
        ]);

         View::composers([
            'Apemesp\Composers\PropagandasComposer'  => ['partials._sidebar']
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
