<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Assunto;

use DB;

class ConfigsRepository
{

	public function getAssuntos()
	{
		return DB::table('assuntos')->select('*')->paginate(4);
	}

	public function getEscalas()
	{
		return DB::table('escalas')->select('*')->paginate(4);
	}

	public function getProximidades()
	{
		return DB::table('proximidade_geografica')->select('*')->paginate(4);
	}

	public function setAssunto($assunto, $email)
	{
		$table = new Assunto;
        $table->assunto = $assunto;
        $table->email = $email;
        $table->save();
	}

}
