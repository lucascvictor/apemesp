<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

use App\Apemesp\Models\Menu;

use Illuminate\Support\Facades\Input;

use DB;

use Auth;

use App\Apemesp\Models\User;

use App\Apemesp\Models\Assunto;

use Session;

use Response;

class UserController extends Controller{




public function __construct(){
	
	 	$this->middleware('auth', ['except' => 'logout']);
         
}




public function autocomplete()
{
	$term = Input::get('term');
	
	$results = array();
	
	// this will query the users table matching the first name or last name.
	// modify this accordingly as per your requirements
	
	$queries = DB::table('dados_pessoais')
		->where('name', 'LIKE', '%'.$term.'%')
		->take(5)->get();
	
	foreach ($queries as $query)
	{
	    $results[] = [ 'id' => $query->id, 'value' => $query->name];
	}
	return Response::json($results);

}


}