<?php

namespace Apemesp\Apemesp\Repositories\Associado;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Nacionalidade;

use Apemesp\Apemesp\Models\Cidade;

use Apemesp\Apemesp\Models\Estado;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\DadosPessoais;

use Apemesp\Apemesp\Models\FormacoesAcademicas;

use Apemesp\Apemesp\Models\UsuarioCategoria;

use Illuminate\Support\Collection;

use DB;

class DadosAcademicosRepository
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

	public function getEstados()
	{
		return Estado::orderby('nome', 'asc')->get();
	}

	public function getCidadeEspecifica($id_cidade)
	{
		return Cidade::where('id', $id_cidade)->get();
	}

	public function getFormacoes($id_user)
	{
		return FormacoesAcademicas::where('id_usuario', $id_user)->where('D_E_L_E_T_E_D', 0)->paginate(7);
	}

	public function getFormacao($id)
	{
		return FormacoesAcademicas::find($id);
	}

	public function getCategoriaUsuario($id_user)
	{
		return UsuarioCategoria::where('id_user', $id_user)->select('*')->get();
	}

	public function getCpf($id_user)
	{
		$dado = DadosPessoais::where('id_user', $id_user)->select('cpf')->get();
		return $dado[0]->cpf;
	}

	public function getUltimoTcc($id_user)
	{
		$tccs = FormacoesAcademicas::where('id_usuario', $id_user)->select('arquivotcc')->get();
		$collection = collect($tccs);
		$answer = $collection->contains('arquivotcc','tcc1.pdf');
		if ($answer == false) {
			return 1;
		} else {
			$tamanho = count($tccs);
			return $tamanho+1;
		}
	}

	public function getUltimoCertificado($id_user)
	{
		$certificados = FormacoesAcademicas::where('id_usuario', $id_user)->select('certificado')->get();
		$collection = collect($certificados);
		$answer = $collection->contains('certificado','certificado1.pdf');
		if ($answer == false) {
			return 1;
		} else {
			$tamanho = count($certificados);
			return $tamanho+1;
		}
	}


	public function verificaTcc($id)
	{
		$tcc = FormacoesAcademicas::where('id', $id)->select('arquivotcc')->get();
		return $tcc[0]->arquivotcc;
	}

	public function verificaCertificado($id)
	{
		$certif = FormacoesAcademicas::where('id', $id)->select('certificado')->get();
		return $certif[0]->certificado;
	}

	public function storeUsuarioCategoria($id_user, $request)
	{
		$categoria = new UsuarioCategoria;
        $categoria->id_user = $id_user;
        $categoria->id_categoria = $request->categoria;
        $categoria->save();
	}

	public function storeDadosAcademicos($id_user, $request, $arquivoTcc, $arquivoCertificado)
	{
		$dadosAcademicos = new FormacoesAcademicas;
        $dadosAcademicos->id_usuario = $id_user;
        $dadosAcademicos->nomeies = $request->nomeies;
        $dadosAcademicos->arquivotcc= $arquivoTcc;
        $dadosAcademicos->certificado = $arquivoCertificado;
        $dadosAcademicos->id_categoria_formacao = $request->id_categoria_formacao;
        $dadosAcademicos->id_estado = $request->id_estado;
        $dadosAcademicos->id_cidade = $request->id_cidade;
        $dadosAcademicos->titulo = $request->titulo;
        $dadosAcademicos->anodeconclusao = $request->anodeconclusao;
        $dadosAcademicos->titulotcc = $request->titulotcc;
        $dadosAcademicos->atividades = $request->atividades;
        $dadosAcademicos->cargahoraria = $request->cargahoraria;
        $dadosAcademicos->save();
	}

	public function updateDadosAcademicos($id, $request)
	{
		 FormacoesAcademicas::where('id', $id)
            ->update([
            'id_categoria_formacao' => $request->id_categoria_formacao,
            'id_estado' => $request->estado,
            'id_cidade' => $request->cidade,
            'nomeies' => $request->nomeies,
            'titulo' => $request->titulo,
            'anodeconclusao' => $request->anodeconclusao,
            'titulotcc' => $request->titulotcc,
            'atividades' => $request->atividades,
            'cargahoraria' => $request->cargahoraria,
            'updated_at' => $this->getData()
                ]);
	}

	public function updateArquivoTcc($id, $arquivoTcc)
	{
		FormacoesAcademicas::where('id', $id)->update([
                 'arquivotcc' => $arquivoTcc
                ]);
	}

	public function updateArquivoCertificado($id, $arquivoCertificado)
	{
		FormacoesAcademicas::where('id', $id)->update([
                 'certificado' => $arquivoCertificado
                ]);
	}

	public function changeCadastro($id_user, $id)
	{
		$id_atual = User::where('id', $id)->get();
		if ($id_atual[0]->id < 3) {
			User::where('id', $id_user)->update(['id_cadastro' => 3]);
		}
	}

	public function deleteDadosAcademicos($id)
	{
		FormacoesAcademicas::where('id', $id)->update(['D_E_L_E_T_E_D' => 1]);
	}



}
