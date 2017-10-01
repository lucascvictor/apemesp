<?php

namespace App\Apemesp\Repositories\Apemesp;


use App\Http\Requests;

use App\Apemesp\Models\LinhaDoTempo;

use App\Apemesp\Models\Literatura;

use App\Apemesp\Models\Page;

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