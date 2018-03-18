<?php
namespace Apemesp\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Apemesp\Http\Controllers\Controller;
use Apemesp\Http\Requests;
use Apemesp\Apemesp\Models\Menu;
use Apemesp\Apemesp\Repositories\Admin\LiteraturaRepository;
use Apemesp\Apemesp\Repositories\Admin\ConfigsRepository;
use Auth;
use Session;
use View;
class LiteraturaController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'logout']);
        View::composers([
			'Apemesp\Composers\MenuComposer'  => ['partials.admin._nav'],
			'Apemesp\Composers\MensagensComposer'  => ['partials.admin._mensagens']
        ]);
    }
    public function addLiteratura()
    {
    	return view('admin.admin.paginas.add.literatura');
    }
    public function listLiteratura()
    {
			$repository = new LiteraturaRepository;
			$literaturas = $repository->listAll();
			return view('admin.admin.paginas.list.literatura')->with('literaturas', $literaturas);
    }
    public function storeLiteratura(Request $request)
    {
      $repository = new LiteraturaRepository;
      $id = $repository->store($request);
			$nomeArquivo = $this->storeImage($id, $request);
			$repository->updateImagem($nomeArquivo, $id);
      return redirect()->route('list.literatura');
    }
		public function storeImage($id, $request)
		{
			//Armazenamento da imagem
			$extensao = $request->file('imagem')->getClientOriginalExtension();
			$pastaDestino = base_path() . DIRECTORY_SEPARATOR . 'public/images/musicoterapia/literatura/';
			$nomeArquivo ='literatura'. $id . '.' . $extensao;
			$request->file('imagem')->move($pastaDestino, $nomeArquivo);
			return $nomeArquivo;
		}
        public function destroyLiteratura($id)
        {
            $repository = new LiteraturaRepository;
            $repository->destroy($id);
            return redirect()->back();
        }

		public function editLiteratura($id)
		{
			$repository = new LiteraturaRepository;
			$literatura = $repository->getLiteratura($id);
			return view('admin.admin.paginas.edit.literatura')->with('literatura', $literatura);
        }
        
		public function updateLiteratura(Request $request, $id)
		{
			$repository = new LiteraturaRepository;
			$repository->update($request, $id);
			return route('list.literatura');
        }
        
        public function adminIndex()
        {
            return view('admin.admin.literatura.index');
        }
    
}