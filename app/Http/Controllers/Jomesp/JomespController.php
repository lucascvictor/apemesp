<?php

namespace Apemesp\Http\Controllers\Jomesp;

use Illuminate\Http\Request;

use Apemesp\Http\Requests;

use Response;

use Session;

use View;

use DB;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Apemesp\Repositories\Apemesp\PagesRepository;

use Apemesp\Apemesp\Models\Tag;

use Apemesp\Apemesp\Repositories\Admin\PaginasRepository;

use Cache;

class JomespController extends Controller{



public function getIndex()
{
	$posts = DB::table('posts')
                     ->select('*')
                     ->where('id_destino', 2)
                     ->orderBy('posts.id', 'desc')
                     ->paginate(6);

		$tags = Tag::all();
		if(count($posts) == 0) {
			return view('errors.404');
		} else {
    	return view('jomesp.index')->with('posts', $posts)->with('tags', $tags);
		}
}

public function getContato()
{
	return view('jomesp.contato');
}

public function getEdicoes()
{
		$page = new PagesRepository;
		$edicoes = $page->getEdicoes();
    return view('jomesp.edicoes')->with('edicoes', $edicoes);
}

public function getSobre()
{
    return view('jomesp.sobre');
}

public function getPost($id)
{

        $page = new PagesRepository;
        $post = $page->getPost($id);
        $view = $page->getPostView($id);

        if ($post == null) {
            return view('errors.post');
        } else {
            if (Cache::has($id) == false) {
                Cache::add($id, 'contador', 0.30);
                $view->total_visitas++;
                $view->save();
            }
            unset($page);

            return view('jomesp.posts.show')->with('post', $post);
        }

}


public function download($arquivo)
{
		$file= public_path(). "/files/edicoesJomesp" . "/" . $arquivo;
		$headers = array('Content-Type: application/pdf',);
		if (file_exists($file)) {
			return Response::download($file, 'edicaoJomesp.pdf', $headers);
		} else {
			Session::flash('cuidado','Arquivo não encontrado para download');
			return redirect()->back();
		}
}




}
