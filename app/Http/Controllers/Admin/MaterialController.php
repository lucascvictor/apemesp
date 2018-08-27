<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Menu;

use Apemesp\Apemesp\Repositories\Admin\MaterialRepository;

use Apemesp\Apemesp\Repositories\Admin\ConfigsRepository;

use Auth;

use Session;

use View;

class MaterialController extends Controller
{


	public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);

        View::composers([
			'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
			'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);

    }


    public function addMaterial()
    {
    	return view('admin.admin.paginas.add.material');
    }

    public function listMateriais()
    {
			$repository = new MaterialRepository;
			$materiais = $repository->listAll();
			return view('admin.admin.paginas.list.material')->with('materiais', $materiais);
    }

    public function storeMaterial(Request $request)
    {

		$repository = new MaterialRepository;

		$id = $repository->store($request);

		$nomeArquivo = $this->storeImage($id, $request);

		$repository->updateImagem($nomeArquivo, $id);

		return redirect()->route('list.materiais');
    }

	public function storeImage($id, $request)
	{
		//Armazenamento da imagem
		$extensao = $request->file('imagem')->getClientOriginalExtension();
		$pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/images/musicoterapia/material/';
		$nomeArquivo ='material'. $id . '.' . $extensao;
		$arquivo = $pastaDestino . $nomeArquivo;
		if (file_exists($arquivo)) {
			unlink($arquivo);
		}
		$request->file('imagem')->move($pastaDestino, $nomeArquivo);
		
		return $nomeArquivo;
	}


    public function destroyMaterial($id)
    {
			$repository = new MaterialRepository;
			$repository->destroy($id);
			return redirect()->back();
    }

	public function editMaterial($id)
	{
		$repository = new MaterialRepository;
		$material = $repository->getMaterial($id);
		return view('admin.admin.paginas.edit.material')->with('material', $material);
	}

	public function updateMaterial(Request $request, $id)
	{
		$repository = new MaterialRepository;
		$nomeArquivo = $this->storeImage($id, $request);
		$repository->updateImagem($nomeArquivo, $id);
		$repository->update($request, $id);
		return redirect()->route('list.materiais');
	}

}
