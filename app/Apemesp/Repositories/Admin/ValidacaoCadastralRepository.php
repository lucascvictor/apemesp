<?php

namespace Apemesp\Apemesp\Repositories\Admin;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\ValidacaoCadastral;

use Apemesp\Apemesp\Models\EmailsValidacao;

use DB;

class ValidacaoCadastralRepository
{

	public function historico($id)
	{
        return ValidacaoCadastral::where('id_user', $id)->paginate(5);
    }
    
    public function emails($id)
    {
        return EmailsValidacao::where('id_user', $id)->paginate(5);
    }

	public function status($id_user, $status, $observacoes)
	{
        $table             = new ValidacaoCadastral;
        $table->id_user    = $id_user;
        $table->status     = $status;
        $table->observacoes = $observacoes;
        $table->created_at = date("Y-m-d H:i:s");
        $table->save();

        return 1;
    }
    

	public function email($request)
	{
		$table              = new EmailsValidacao;
        $table->id_user     = $request->id;
        $table->mensagem    = $request->mensagem;
        $table->created_at  = date("Y-m-d H:i:s");
        $table->save();

        return 1;
	}

}