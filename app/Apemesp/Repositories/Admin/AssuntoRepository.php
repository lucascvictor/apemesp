<?php

namespace App\Apemesp\Repositories\Admin;


use App\Http\Requests;

use App\Apemesp\Models\User;

use App\Apemesp\Models\Assunto;

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
