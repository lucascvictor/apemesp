<?php

namespace Apemesp\Http\Controllers\Apemesp;

use Apemesp\Http\Controllers\Controller;

use View;

class AgendaController extends Controller{

	public function __construct(){
		 View::composers([
			'Apemesp\Composers\MaisVistosComposer'  => ['partials._sidebar'],
			'Apemesp\Composers\PropagandasComposer'  => ['partials._sidebar'],
			'Apemesp\Composers\FooterComposer'  => ['partials._footer'] 
        ]);
	}

	public function getAgenda(){
		return view('paginas.agenda');
	}

}