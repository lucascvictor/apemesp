<?php

namespace Apemesp\Apemesp\Repositories\Apemesp;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Assunto;

use DB;

class ContatoRepository
{
	public function getAssuntos()
	{
		return Assunto::all();
	}
}