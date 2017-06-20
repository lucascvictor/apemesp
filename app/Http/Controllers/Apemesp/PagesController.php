<?php

namespace App\Http\Controllers\Apemesp;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Apemesp\Repositories\Apemesp\PagesRepository;

use App\Apemesp\Repositories\Admin\PostRepository;

use View;

use App\Http\Controllers\Controller;



use Session;

use Cache;

class PagesController extends Controller{

	public function __construct()
    {
         
         View::composers([
            'App\Composers\MaisVistosComposer'  => ['partials._sidebar'] 
        ]);
     }

	public function getIndex() {
		$page = new PagesRepository;
		$posts = $page->getIndex();
		$posts->setPath('/');
		$tags = $page->getTags();
		unset($page);
        return view('paginas.welcome')->with('posts', $posts)->with('tags', $tags);
	}

	

	public function getPost($id)
	{

		$page = new PagesRepository;
		$post = $page->getPost($id);
	    $view = $page->getPostView($id);
	
	    if ($post == null){
	    	return view('errors.post');
	    } else {
		    if (Cache::has($id) == false) {
		        Cache::add($id, 'contador', 0.30);
		        $view->total_visitas++;
		        $view->save();
		    }
		    unset($page);

		    return view('paginas.posts.show')->with('post', $post);
		}

	}

	public function getSobre(){
		$primeiro = "Lucas";
		$ultimo = "Victor";
		$full = $primeiro . " " . $ultimo;
		$dados = [];
		$dados['primeiro'] = $primeiro;
		$dados['ultimo'] = $ultimo;
		return view('paginas.sobre')->with("dados", $dados);
	}


	public function getAcoes() {
		return view('paginas.apemesp.acoes');
	}

	public function getComissoes() {
		return view('paginas.apemesp.comissoes');
	}

	public function getDocumentos() {
		return view('paginas.apemesp.documentos');
	}

	public function getQuemSomos() {
		$page = new PagesRepository;
		$pagina = $page->getQuemSomos();
		unset($page);
		if ($pagina == null) {
			return view('errors.404');
		} else {
			return view('paginas.apemesp.quemsomos')->with('pagina', $pagina);
		}
		
	}

	public function getEstatuto()
	{
		$page = new PagesRepository;
		$pagina = $page->getEstatuto();
		unset($page);
		return view('paginas.apemesp.estatuto')->with('pagina', $pagina);
	}

	public function search(Request $request)
	{
		$postRepository = new PostRepository;
        $posts = $postRepository->search($request, 1);

        $path = "search?q=" . $request->q;
        $posts->setPath($path);

        $page = new PagesRepository;
		$tags = $page->getTags();

		unset($page);
        unset($postRepository);
        return view('paginas.welcome')->with('posts', $posts)->with('tags', $tags);
	}

}