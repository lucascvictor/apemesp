<?php

namespace App\Http\Controllers\Apemesp;

use App\Http\Controllers\Controller;

use App\Apemesp\Repositories\Apemesp\EncontreUmMtRepository;


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
    	$encontre = new EncontreUmMtRepository;
    	$especialidades = $encontre->getEspecialidades();
    	$proximidades = $encontre->getProximidades();
        return view('paginas.encontreummt')->with('especialidades', $especialidades)->with('proximidades', $proximidades);
    }

}