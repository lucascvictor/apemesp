<?php

namespace Apemesp\Http\Controllers\Apemesp;

use Apemesp\Http\Controllers\Controller;
use Apemesp\Apemesp\Repositories\Apemesp\EncontreUmMtRepository;
use Apemesp\Apemesp\Repositories\Admin\EspecialidadeRepository;
use Apemesp\Apemesp\Repositories\Admin\EscalaRepository;
use Apemesp\Apemesp\Repositories\Admin\ProximidadeRepository;
use Illuminate\Http\Request;
use Apemesp\Http\Requests;
use View;
use Session;

class EncontreUmMtController extends Controller{

	public function __construct()
    {
		View::composers([
			'Apemesp\Composers\MaisVistosComposer'  => ['partials._sidebar'],
			'Apemesp\Composers\PropagandasComposer'  => ['partials._sidebar'],
			'Apemesp\Composers\FooterComposer'  => ['partials._footer'] 
        ]);
     }

    public function getIndex(){
    		$especialidades = new EspecialidadeRepository;
			$escalas = new EscalaREpository;
			$proximidades = new ProximidadeRepository;
			$pesquisa = 0;
			$mtRepository = new EncontreUmMtRepository;
			$mts = $mtRepository->getMtAll();
			
        return view('paginas.encontreummt')
				->with('especialidades', $especialidades->getEspecialidades())
				->with('proximidades', $proximidades->getProximidades())
				->with('escalas', $escalas->getEscalas())
				->with('mts', $mts);
    }

		public function search(Request $request)
		{
			$especialidades = new EspecialidadeRepository;
			$escalas = new EscalaREpository;
			$proximidades = new ProximidadeRepository;
			$mts = array();

				$encontreummtRepository = new EncontreUmMtRepository;

				$especialidade = $request->especialidade;
				$proximidade = $request->proximidade;
				$escala = $request->escala;
				$nome = $request->nome;

				if ($proximidade == null && $escala == null && $nome == null && $especialidade ==null) {
					$mts = $encontreummtRepository->getMtAll();
					$path = "search?especialidade=" . $especialidade;

				} else {
					$mts = $encontreummtRepository->getMts($proximidade, $escala, $nome, $especialidade);
				}
				
				$musicoterapeutas = $encontreummtRepository->valida($mts);

				unset($encontreummtRepository);
				return view('paginas.encontreummt')->with('mts', $musicoterapeutas)
				->with('especialidades', $especialidades->getEspecialidades())
				->with('proximidades', $proximidades->getProximidades())
				->with('escalas', $escalas->getEscalas());

		}

}
