<?php

namespace Apemesp\Apemesp\Repositories\Associado;


use Apemesp\Http\Requests;


use Apemesp\Apemesp\Models\Documentacao;

use Apemesp\Apemesp\Models\User;

use DB;

use Auth;

class DocumentacaoRepository
{

  public function storeDocumentacao($rg, $cpf, $cnh, $id_user, $comprovante_e)
  {

    $documentacao = new Documentacao;
    $documentacao->id_user = $id_user;
    $documentacao->rg = $rg;
    $documentacao->cpf= $cpf;
    $documentacao->cnh = $cnh;
    $documentacao->comprovante_e = $comprovante_e;
    $documentacao->save();

  }

  public function changeCadastro($id_user, $status)
  {
    $id_atual = User::select('id_cadastro')->where('id', $id_user)->get();
    if ($id_atual[0]->id_cadastro == 5 && $status == 5) {
      User::where('id', $id_user)->update(['id_cadastro' => 6]);
    }

    if($id_atual[0]->id_cadastro == 4) {
      User::where('id', $id_user)->update(['id_cadastro' => 5]);
    }
  }


  public function destroy($id)
  {
    return Documentacao::where('id', $id)->delete();
  }


}
