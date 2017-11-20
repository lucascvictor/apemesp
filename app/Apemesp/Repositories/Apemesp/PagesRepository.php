<?php

namespace Apemesp\Apemesp\Repositories\Apemesp;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Tag;

use Apemesp\Apemesp\Models\Post;

use Apemesp\Apemesp\Models\PostView;

use Apemesp\Apemesp\Models\Page;

use DB;

class PagesRepository
{
	public function getIndex()
	{
		return DB::table('posts')->select('*')->where('id_destino', 1)->orderBy('posts.id', 'desc')->paginate(6);
	}

	public function getTags()
	{
		return Tag::all();
	}

	public function getPost($id)
	{
		return DB::table('posts')
	         ->join('users', 'users.id', '=', 'posts.id_user')
	         ->select('posts.*', 'users.name')
	         ->where('posts.id', '=', $id)
	         ->get();
	}

	public function getPostView($id)
	{
		return PostView::find($id);
	}

	public function getQuemSomos()
	{
		return Page::find(1);
	}

	public function getEstatuto()
	{
		return Page::find(2);
	}

	public function getPostsTag($id)
	{
		return DB::table('posts')->select('*')->where([['id_destino','=', 1], ['id_tag', '=', $id]])->orderBy('posts.id', 'desc')->paginate(6);
	}

}