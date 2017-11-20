<?php

namespace Apemesp\Apemesp\Repositories\Associado;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Assunto;

use Apemesp\Apemesp\Models\Nacionalidade;

use Apemesp\Apemesp\Models\Estado;

use Apemesp\Apemesp\Models\Cidade;

use Apemesp\Apemesp\Models\Escala;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\DadosProfissionais;

use Apemesp\Apemesp\Models\ProximidadeGeografica;

use Apemesp\Apemesp\Models\Especialidade;

use DB;

use Auth;

class DadosProfissionaisRepository
{

  public function getEspecialidades()
  {
    return Especialidade::all();
  }

  public function getProximidades()
  {
    return ProximidadeGeografica::all();
  }

  public function getNacionalidade()
  {
    return Nacionalidade::all();
  }

  public function getEstados()
  {
    return Estado::orderby('nome', 'asc')->get();
  }

  public function getEscalas()
  {
    return Escala::orderby('escala', 'asc')->get();
  }

  public function getCidadeEspecifica($id_cidade)
  {
    $cidade = Cidade::where('id', $id_cidade)->select('nome')->get();
    return $cidade[0]->nome;
  }

  public function getEstadoEspecifico($id_estado)
  {
    $estado = Estado::where('id', $id_estado)->select('abrev')->get();
    return $estado[0]->abrev;
  }

  public function getDadosProfissionais($user_id)
  {
    return DadosProfissionais::where('id_user', $user_id)->paginate(5);
  }

  public function getDadoProfissional($id, $user_id)
  {
    return DadosProfissionais::where('id_user', $user_id)->where('id', $id)->get();
  }

  public function storeOpcaoDeAtendimento()
  {
    User::where('id', $this->getIdUser())->update(['opcao_dados_profissionais' => 1,]); //1- para desativado
  }

  public function storeDadosProfissionais($request)
  {

    $dadosProfissionais = new DadosProfissionais;
    $dadosProfissionais->id_user = $this->getIdUser();
    $dadosProfissionais->cep = $request->cep;
    $dadosProfissionais->endereco= $request->endereco;
    $dadosProfissionais->complemento = $request->complemento;
    $dadosProfissionais->bairro = $request->bairro;
    $dadosProfissionais->id_estado = $this->getEstado($request->estado);
    $dadosProfissionais->id_cidade = $request->codCidade;
    $dadosProfissionais->id_proximidade = $request->proximidade;
    $dadosProfissionais->id_especialidade = $request->especialidade;
    $dadosProfissionais->id_dias_atendimento = $request->dias_atendimento;
    $dadosProfissionais->linkedin = $request->linkedin;
    $dadosProfissionais->telefone = $request->telefone;
    $dadosProfissionais->save();

    if ($dadosProfissionais->id > 0) {
      return 0;
    }
    return 1;
  }

  public function getEstado($abrev)
	{
		$estado = Estado::where('abrev', $abrev)->select('id')->get();
		return $estado[0]->id;
	}

  public function getIdUser()
  {
    return Auth::user()->id;
  }

  public function changeCadastro($id_user, $id)
  {
    $id_atual = User::where('id', $id)->get();
    if ($id_atual[0]->id < 4) {
      User::where('id', $id_user)->update(['id_cadastro' => 4]);
    }
  }

  public function updateDadosProfissionais($request, $id)
  {
     DadosProfissionais::where('id', $id)->where('id_user', $this->getIdUser())
            ->update([
            'cep' => $request->cep,
            'endereco' => $request->endereco,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'id_estado' => $this->getEstado($request->estado),
            'id_cidade' => $request->codCidade,
            'id_proximidade' => $request->proximidade,
            'id_especialidade' => $request->especialidade,
            'id_dias_atendimento' => $request->dias_atendimento,
            'linkedin' => $request->linkedin,
            'telefone' => $request->telefone

                ]);

  }


}
