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
		return DB::table('assuntos')->select('*')->orderBy('id', 'desc')->paginate(4);
	}

	public function getAssunto($id)
	{
		return DB::table('assuntos')->select('*')->where('id', '=',$id)->get();
	}


	public function updateAssunto($request, $id)
	{
		Assunto::where('id', $id)
            ->update([
                'assunto' => $request->assunto,
                'email' => $request->email,
                ]);
	}

	public function deleteAssunto($id)
	{
		Assunto::where('id', $id)->delete();
	}

	public function setAssunto($assunto, $email)
	{
		    $table = new Assunto;
        $table->assunto = $assunto;
        $table->email = $email;
        $table->save();
	}

}
