<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\Page;

use DB;

class PaginasRepository
{

	public function busca($item)
	{
		$busca = '%' . $item . '%';
        return Page::where('titulo', 'like', $busca)->get();
	}


}