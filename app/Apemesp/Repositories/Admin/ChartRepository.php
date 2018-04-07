<?php

namespace Apemesp\Apemesp\Repositories\Admin;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\AditionalUserData;

use Apemesp\Apemesp\Models\PostView;

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
		return AditionalUserData::whereRaw('created_at > (NOW() - INTERVAL ? DAY)', [$intervalo])->count();
	}

	public function getPostsViews()
	{
		return PostView::select("*")->get();
	}


}
