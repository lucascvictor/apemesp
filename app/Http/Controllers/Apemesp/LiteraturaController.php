<?php

namespace Apemesp\Http\Controllers\Apemesp;

use Apemesp\Http\Controllers\Controller;

use View;

class LiteraturaController extends Controller{

	public function __construct(){
		 View::composers([
            'Apemesp\Composers\MaisVistosComposer'  => ['partials._sidebar'] 
        ]);

		 View::composers([
            'Apemesp\Composers\PropagandasComposer'  => ['partials._sidebar'] 
        ]);
	}

}