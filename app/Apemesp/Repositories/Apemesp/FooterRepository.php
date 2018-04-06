<?php

namespace Apemesp\Apemesp\Repositories\Apemesp;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\Footer;

use DB;

class FooterRepository
{
	public function getAll()
	{
		return Footer::all(); 
	}

	public function getFooter()
	{
		return Footer::where('id', '>', 0)->orderBy('titulo', 'asc')->paginate(3);
	}

}