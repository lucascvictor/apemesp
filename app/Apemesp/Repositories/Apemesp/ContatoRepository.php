<?php

namespace App\Apemesp\Repositories\Apemesp;


use App\Http\Requests;

use App\Apemesp\Models\Assunto;

use DB;

class ContatoRepository
{
	public function getAssuntos()
	{
		return Assunto::all();
	}
}