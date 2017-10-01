<?php

namespace App\Apemesp\Repositories\Admin;


use App\Http\Requests;

use App\Apemesp\Models\User;

use App\Apemesp\Models\Page;

use DB;

class PaginasRepository
{

	public function busca($item)
	{
		$busca = '%' . $item . '%';
        return Page::where('titulo', 'like', $busca)->get();
	}


}