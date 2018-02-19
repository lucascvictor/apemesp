<?php

namespace Apemesp\Apemesp\Repositories\Admin;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\AditionalUserData;

use DB;

class ChartRepository
{

	public function getMeses()
	{
		return User::where('created_at', '>', '(NOW() - INTERVAL 30 DAY)')->get();
	}

	public function getAnos()
	{
		return DB::table('assuntos')->select('*')->where('id', '=',$id)->get();
	}

	public function getIntervalo($intervalo)
	{
		return User::where('created_at', '>', '(NOW() - INTERVAL'. $intervalo .'DAY)')->count()->get();
	}


}
