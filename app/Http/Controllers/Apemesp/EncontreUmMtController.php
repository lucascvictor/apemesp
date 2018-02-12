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
			$mtRepository = new EncontreUmMtRepository;
			$mts = $mtRepository->getAll();
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

				$encontreummtRepository = new EncontreUmMtRepository;

				$especialidade = $request->especialidade;
				$proximidade = $request->proximidade;
				$escala = $request->escala;
				$nome = $request->nome;

				if ($proximidade == null && $escala == null && $nome == null && $especialidade ==null) {
					Session::flash('cuidado', 'Nenhuma busca foi realizada');
					return redirect()->back();
				}

				if ($proximidade == null && $escala == null && $nome == null) {
					$mts = $encontreummtRepository->getMtEspecialidade($especialidade);
					$path = "search?especialidade=" . $especialidade;

					unset($encontreummtRepository);
					return view('paginas.encontreummt')->with('mts', $mts)
					->with('especialidades', $especialidades->getEspecialidades())
					->with('proximidades', $proximidades->getProximidades())
					->with('escalas', $escalas->getEscalas());
				}


				if ($especialidade == null && $escala == null && $nome == null) {
					$mts = $encontreummtRepository->getMtProximidade($proximidade);
					$path = "search?especialidade=" . $especialidade;

					unset($encontreummtRepository);
					return view('paginas.encontreummt')->with('mts', $mts)
					->with('especialidades', $especialidades->getEspecialidades())
					->with('proximidades', $proximidades->getProximidades())
					->with('escalas', $escalas->getEscalas());
				}

				if ($proximidade == null && $especialidade == null && $nome == null) {
					$mts = $encontreummtRepository->getMtEscala($escala);
					$path = "search?especialidade=" . $especialidade;

					unset($encontreummtRepository);
					return view('paginas.encontreummt')->with('mts', $mts)
					->with('especialidades', $especialidades->getEspecialidades())
					->with('proximidades', $proximidades->getProximidades())
					->with('escalas', $escalas->getEscalas());
				}


				if ($proximidade == null && $especialidade == null && $escala == null) {
					$mts = $encontreummtRepository->getMtNome($nome);
					$path = "search?especialidade=" . $especialidade;

					unset($encontreummtRepository);
					return view('paginas.encontreummt')->with('mts', $mts)
					->with('especialidades', $especialidades->getEspecialidades())
					->with('proximidades', $proximidades->getProximidades())
					->with('escalas', $escalas->getEscalas());
				}

				if ($proximidade != null && $escala != null && $nome != null && $especialidade != null) {
					$mts = $encontreummtRepository->getMtAll($proximidade, $escala, $nome, $especialidade);

					unset($encontreummtRepository);
					return view('paginas.encontreummt')->with('mts', $mts)
					->with('especialidades', $especialidades->getEspecialidades())
					->with('proximidades', $proximidades->getProximidades())
					->with('escalas', $escalas->getEscalas());
				}


				if ($proximidade != null && $escala != null && $nome != null && $especialidade == null) {
					$mts = $encontreummtRepository->getMtSemEspecialidade($proximidade, $escala, $nome);

					unset($encontreummtRepository);
					return view('paginas.encontreummt')->with('mts', $mts)
					->with('especialidades', $especialidades->getEspecialidades())
					->with('proximidades', $proximidades->getProximidades())
					->with('escalas', $escalas->getEscalas());
				}

				if ($proximidade != null && $escala != null && $nome == null && $especialidade != null) {
					$mts = $encontreummtRepository->getMtSemNome($proximidade, $escala, $especialidade);

					unset($encontreummtRepository);
					return view('paginas.encontreummt')->with('mts', $mts)
					->with('especialidades', $especialidades->getEspecialidades())
					->with('proximidades', $proximidades->getProximidades())
					->with('escalas', $escalas->getEscalas());
				}

				if ($proximidade != null && $escala == null && $nome != null && $especialidade != null) {
					$mts = $encontreummtRepository->getMtSemEscala($proximidade, $especialidade, $nome);

					unset($encontreummtRepository);
					return view('paginas.encontreummt')->with('mts', $mts)
					->with('especialidades', $especialidades->getEspecialidades())
					->with('proximidades', $proximidades->getProximidades())
					->with('escalas', $escalas->getEscalas());
				}

				if ($proximidade == null && $escala != null && $nome != null && $especialidade != null) {
					$mts = $encontreummtRepository->getMtSemProximidade($especialidade, $nome, $escala);

					unset($encontreummtRepository);
					return view('paginas.encontreummt')->with('mts', $mts)
					->with('especialidades', $especialidades->getEspecialidades())
					->with('proximidades', $proximidades->getProximidades())
					->with('escalas', $escalas->getEscalas());
				}

				return view('paginas.encontreummt')->with('mts', $mts)
				->with('especialidades', $especialidades->getEspecialidades())
				->with('proximidades', $proximidades->getProximidades())
				->with('escalas', $escalas->getEscalas());

		}

}
