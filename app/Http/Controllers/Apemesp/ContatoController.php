<?php

namespace Apemesp\Http\Controllers\Apemesp;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Apemesp\Repositories\Apemesp\ContatoRepository;

use Request;

use View;

class ContatoController extends Controller{

	public function __construct()
    {      
        View::composers([
			'Apemesp\Composers\MaisVistosComposer'  => ['partials._sidebar'],
			'Apemesp\Composers\PropagandasComposer'  => ['partials._sidebar'],
			'Apemesp\Composers\FooterComposer'  => ['partials._footer'] 
        ]);
     }

	public function getLocalizacao() {

		Mapper::map(-23.6470184,-46.6443988, ['zoom' => 15, 'center' => true]);
		return view('paginas.contato.localizacao');
		
	}

	public function getMensagens() {
		$contatoRepository = new ContatoRepository;
		$assuntos = $contatoRepository->getAssuntos();
		unset($contatoRepository);
		return view('paginas.contato.mensagens')->with('assuntos', $assuntos);
	}

	public function postMensagens(Request $request){

	}

}
