<?php

namespace Apemesp\Apemesp\Repositories\Admin;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\AditionalUserData;

use DB;

class ChartRepository
{

	public function getMeses($ano = "")
	{
		if (empty($ano))
		$ano = date("Y");
		$i = 1;
		$meses = [];
		while($i <= 12) {
			$meses[$i] = AditionalUserData::whereRaw('MONTH(created_at) = ?', [$i])->whereRaw('YEAR(created_at) = ?', [$ano] )->count();
			$i++;
		}
		
		return $meses;
	}

	public function getAnos()
	{
		$i = 2018;
		while($i <= 2048) {
			$anos[$i] = AditionalUserData::whereRaw('YEAR(created_at) = ?', [$i] )->count();
			$i++;
		}
		return $anos;	
	}

	public function getIntervalo($intervalo)
	{
		return AditionalUserData::where('created_at', '>', '(NOW() - INTERVAL'. $intervalo .'DAY)')->count();
	}


}
