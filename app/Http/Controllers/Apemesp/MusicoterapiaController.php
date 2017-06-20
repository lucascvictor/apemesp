<?php

namespace App\Http\Controllers\Apemesp;

use App\Apemesp\Repositories\Apemesp\MusicoterapiaRepository;
use View;
use App\Http\Controllers\Controller;


class MusicoterapiaController extends Controller{

	public function __construct()
    {
         View::composers([
            'App\Composers\MaisVistosComposer'  => ['partials._sidebar'] 
        ]);
     }

	public function getFormacao(){
		return view('paginas.musicoterapia.formacao');
	}

	public function getOque()
	{
		$musicoterapia = new MusicoterapiaRepository;
		$pagina = $musicoterapia->getOquee();
		return view('paginas.musicoterapia.oquee')->with('pagina', $pagina);
	}

	public function getConquistas()
	{
		return view('paginas.musicoterapia.conquistas');
	}

	public function getLiteratura()
	{	
		$musicoterapia = new MusicoterapiaRepository;
		$literaturas = $musicoterapia->getLiteratura();
		return view('paginas.musicoterapia.literatura')->with('literaturas', $literaturas);
	}

	public function getLinhaDoTempo()
	{
		$musicoterapia = new MusicoterapiaRepository;
		$linhadotempo = $musicoterapia->getLinhaDoTempo();
		return view('paginas.musicoterapia.linhadotempo')->with('linhadotempo', $linhadotempo);
	}

	public function getIndicacao()
	{
		return view('paginas.musicoterapia.indicacao');
	}

}