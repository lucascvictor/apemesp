<?php

namespace App\Apemesp\Repositories\Admin;


use App\Http\Requests;

use App\Apemesp\Models\User;

use App\Apemesp\Models\Post;

use DB;

class FinanceiroRepository
{

	public function busca($item)
	{
		$busca = '%' . $item . '%';
        return Post::where('titulo', 'like', $busca)->get();
	}


}