<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Material;

use DB;

class MaterialRepository
{


	public function __construct()
	{
		$this->setData();
	}

	public function setData()
	{
		$this->data = date("Y-m-d H:i:s");
	}

	public function getData()
	{
		return $this->data;
	}

	public function store($request)
	{
		$material = new Material;
        $material->titulo = $request->titulo;
        $material->conteudo = $request->conteudo;
        $material->created_at = $this->getData();
				$material->updated_at = $this->getData();
        $material->save();
        return $material->id;
	}

	public function updateImagem($nomeArquivo, $id)
	{
		Material::where('id', $id)->update(['imagem' => $nomeArquivo ]);
	}
	public function listAll()
	{
		return Material::select('*')->orderBy('id', 'desc')->paginate(10);
	}

	public function getMaterial($id)
	{
		return Material::select('*')->where('id', '=', $id)->get();
	}

	public function update($request, $id)
	{
		Material::where('id', $id)
						->update([
								'titulo' => $request->titulo,
								'conteudo' => $request->conteudo,
								'imagem' => $request->imagem,
								'updated_at' => $this->getData()
								]);
	}

	public function destroy($id)
	{
		$material = Material::find($id);
		$material->delete();
	}




}
