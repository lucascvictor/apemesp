<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Post;

use Apemesp\Apemesp\Models\PostView;

use Apemesp\Apemesp\Models\Tag;

use Auth;

use DB;

class PostRepository
{
	protected $data;

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

	public function getPosts($destino)
	{
		return DB::table('posts')
         ->join('users', 'users.id', '=', 'posts.id_user')
         ->select('posts.*', 'users.name')
         ->where('id_destino', $destino)
         ->orderBy('posts.id', 'desc')
         ->paginate(6);
	}

	public function getTags()
	{
		return Tag::all();
	}

	public function getImage($id)
	{
		return Post::where('id', $id)->select('imagem_previa')->get();
	}

	public function storePost($request)
	{
		$post = new Post;
        $post->titulo = $request->titulo;
        $post->subtitulo = $request->subtitulo;
        $post->previa = $request->previa;
        $post->body = $request->conteudo;
        $post->id_user= Auth::user()->id;
        $post->id_destino = $request->destino;
        $post->id_tag= $request->tag;
        $post->created_at = $this->getData();
        $post->save();
        $view = New PostView;
        $view->id = $post->id;
        $view->total_visitas = 0;
        $view->save();
        return $post->id;
	}

	public function storeImage($id, $nomeArquivo)
	{
        Post::where('id', $id)
        ->update([
            'imagem_previa' => $nomeArquivo,
            'updated_at' => $this->getData()
            ]);
	}

	public function updatePost($request, $id)
	{
		Post::where('id', $id)
            ->update([
                'titulo' => $request->titulo,
                'subtitulo' => $request->subtitulo,
                'id_user' => Auth::user()->id,
                'id_tag' => $request->tag,
                'id_destino' => $request->destino,
                'previa' => $request->previa,
                'body' => $request->conteudo,
                'updated_at' => $this->getData()
                ]);
	}



	public function getPost($id)
	{
		return Post::find($id);
	}

	public function destroy($id)
	{
		Post::where('id', $id)->delete();
        PostView::where('id', $id)->delete();
	}

	public function search($request, $destino)
	{
		$query = "%" . $request->input('q') . "%";
		return DB::table('posts')
		->join('users', 'users.id', '=', 'posts.id_user' )
		->select('posts.*', 'users.name')
		->where([['titulo', 'LIKE', $query],['id_destino', '=', $destino]])
		->orWhere('body', 'LIKE', $query)
		->orderBy('posts.id', 'desc')
		->paginate(6);
	}


}




