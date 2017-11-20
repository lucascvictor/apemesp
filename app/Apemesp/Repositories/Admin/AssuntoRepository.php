<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Assunto;

use DB;

class AssuntoRepository
{

	public function getAssuntos()
	{
		return DB::table('assuntos')->select('*')->paginate(4);
	}



	public function setAssunto($assunto, $email)
	{
		    $table = new Assunto;
        $table->assunto = $assunto;
        $table->email = $email;
        $table->save();
	}

}
