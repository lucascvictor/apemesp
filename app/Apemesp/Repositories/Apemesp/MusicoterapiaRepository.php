<?php

namespace Apemesp\Apemesp\Repositories\Apemesp;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\LinhaDoTempo;

use Apemesp\Apemesp\Models\Literatura;

use Apemesp\Apemesp\Models\Page;

use DB;

class MusicoterapiaRepository
{
	public function getOquee()
	{
		return Page::find(3); //3 é o indice definido no seeder para esta página
	}

	public function getLiteratura()
	{
		return Literatura::where('id', '>', 0)->orderBy('titulo', 'asc')->paginate(3);
	}

	public function getLinhaDoTempo()
	{
		return LinhaDoTempo::where('id', '>=', 1)->orderBy('ano', 'asc')->get();
	}
}