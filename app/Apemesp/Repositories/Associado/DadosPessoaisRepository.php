<?php

namespace App\Apemesp\Repositories\Associado;


use App\Http\Requests;

use App\Apemesp\Models\Nacionalidade;

use App\Apemesp\Models\Cidade;

use App\Apemesp\Models\Estado;

use App\Apemesp\Models\User;

use App\Apemesp\Models\DadosPessoais;

use App\Apemesp\Models\FormacoesAcademicas;

use App\Apemesp\Models\UsuarioCategoria;

use DB;

class DadosPessoaisRepository
{
	protected $data;

	public function __construct()
	{
		$this->setData();
	}

	public function getData()
	{
		return $this->data;
	}

	public function setData()
	{
		$this->data = date("Y-m-d H:i:s");
	}

	public function getNacionalidade()
	{
		return Nacionalidade::all();
	}

	public function getEstados()
	{
		return Estado::orderby('nome', 'asc')->get();
	}

	public function getCidadeEspecifica($id_cidade)
	{
		return Cidade::where('id', $id_cidade)->get();
	}

	public function getDadosPessoais($user_id)
	{
		return DadosPessoais::where('id_user', $user_id)->get();
	}

	public function storeDadosPessoais($request, $user_id, $nomeArquivo)
	{

		 //Salvar no BD os dados pessoais
            $dadosPessoais = new DadosPessoais;
            $dadosPessoais->id_user = $user_id;
            $dadosPessoais->name = $request->name;
            $dadosPessoais->foto= $nomeArquivo;
            $dadosPessoais->facebook = $request->facebook;
            $dadosPessoais->nascimento = $request->nascimento;
            $dadosPessoais->id_nacionalidade = $request->nacionalidade;
            $dadosPessoais->rg = $request->rg;
            $dadosPessoais->cpf = $request->cpf;
            $dadosPessoais->endereco = $request->endereco;
            $dadosPessoais->complemento = $request->complemento;
            $dadosPessoais->bairro = $request->bairro;
            $dadosPessoais->cep = $request->cep;
            $dadosPessoais->id_estado = $this->getEstado($request->estado);
            $dadosPessoais->id_cidade = $request->codCidade;
            $dadosPessoais->tel_celular = $request->tel_celular;
            $dadosPessoais->tel_residencial = $request->tel_residencial;

            $dadosPessoais->save();


        //Alterar o status de cadastros do associado

            User::where('id', $user_id)
            ->update([
                'id_cadastro' => 2,
                'updated_at' => $this->getData()
                ]);
	}

	public function fotoUpdate($cpf)
	{
		DadosPessoais::where('cpf', $cpf)->update([
            'foto' => "foto.jpg",
            ]);
	}

	public function updateDadosPessoais($request, $id)
	{

		DadosPessoais::where('id', $id)
            ->update([

            'name' => $request->name,
            'facebook' => $request->facebook,
            'nascimento' => $request->nascimento,
            'id_nacionalidade' => $request->nacionalidade,
            'rg' => $request->rg,
            'cpf' => $request->cpf,
            'endereco' => $request->endereco,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cep' => $request->cep,
            'id_estado' => $request->estado,
            'id_cidade' => $request->codCidade,
            'tel_celular' => $request->tel_celular,
            'tel_residencial' => $request->tel_residencial,
            'updated_at' => $this->getData()
                ]);
	}

	public function getEstado($abrev)
	{
		$estado = Estado::where('abrev', $abrev)->select('id')->get();
		return $estado[0]->id;
	}


    public function getCpf($id)
    {
        return DadosPessoais::where('id_user', $id)->select('cpf')->get();
    }

}
