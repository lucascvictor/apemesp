<?php

namespace App\Http\Controllers\Apemesp;

use App\Http\Controllers\Controller;

use View;

class AgendaController extends Controller{

	public function __construct(){
		 View::composers([
            'App\Composers\MaisVistosComposer'  => ['partials._sidebar'] 
        ]);
	}

	public function getAgenda(){
		return view('paginas.agenda');
	}

}