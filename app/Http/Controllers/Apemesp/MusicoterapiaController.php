<?php

namespace Apemesp\Http\Controllers\Apemesp;

use Apemesp\Apemesp\Repositories\Apemesp\MusicoterapiaRepository;
use Apemesp\Apemesp\Repositories\Admin\ConquistaRepository;
use Apemesp\Apemesp\Repositories\Admin\FormacaoRepository;
use View;
use Session;
use Request;
use Apemesp\Http\Controllers\Controller;

class MusicoterapiaController extends Controller{

	public function __construct()
    {
		View::composers([
			'Apemesp\Composers\MaisVistosComposer'  => ['partials._sidebar'],
			'Apemesp\Composers\PropagandasComposer'  => ['partials._sidebar'],
			'Apemesp\Composers\FooterComposer'  => ['partials._footer'] 
        ]);
     }

	public function getFormacao(){
		$repository = new FormacaoRepository;
		$formacoes = $repository->listAll();
		return view('paginas.musicoterapia.formacao')->with('formacoes', $formacoes);
	}

	public function getOque()
	{
		$musicoterapia = new MusicoterapiaRepository;
		$pagina = $musicoterapia->getOquee();
		return view('paginas.musicoterapia.oquee')->with('pagina', $pagina);
	}

	public function getConquistas()
	{
		$repository = new ConquistaRepository;
		$conquistas = $repository->listAll();
		return view('paginas.musicoterapia.conquistas')->with('conquistas', $conquistas);
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

	public function storeIndicacao()
	{
		$imagem = Request::file('imagem');
		$musicoterapia = new MusicoterapiaRepository;
		$musicoterapia->storeIndicacao(Request::all(), $imagem);
		Session::flash('sucesso', 'Sua indicação foi enviada');
		return redirect()->back();
	}

	public function getMateriais()
	{
		$materiais = new MusicoterapiaRepository;
		$materiais = $materiais->getMateriais();
		return view('paginas.musicoterapia.materiais')->with('materiais', $materiais);
	}

}
