<?php

namespace Apemesp\Apemesp\Repositories\Associado;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Anuidade;

use Apemesp\Apemesp\Models\DadosBancarios;


use DB;

class FinanceiroRepository
{

  	public function getAnuidades($id_usuario)
	{
		return Anuidade::where('id_user', $id_usuario)->select('*')->get();
	}

	public function getDadosBancarios()
	{
		return DadosBancarios::all();
	}

}
