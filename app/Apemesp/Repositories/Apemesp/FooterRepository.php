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

	public function listAll()
	{
		return Footer::select('*')->paginate(6);
	}

	public function getFooter()
	{
		return Footer::where('id', '>', 0)->orderBy('titulo', 'asc')->paginate(3);
	}

	public function getItem($id)
	{
		return Footer::select('*')->where('id', '=', $id)->first();
	}

	public function update($request, $id)
	{
		LinhaDoTempo::where('id', $id)
						->update([
								'link' => $request->link,
								'imagem' => $request->imagem,
								'formato' => $request->formato,
								'updated_at' => $this->getData()
								]);
	}

}