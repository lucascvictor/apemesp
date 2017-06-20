<?php

namespace App\Apemesp\Repositories\Apemesp;


use App\Http\Requests;

use App\Apemesp\Models\Tag;

use App\Apemesp\Models\Post;

use App\Apemesp\Models\PostView;

use App\Apemesp\Models\Page;

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

}