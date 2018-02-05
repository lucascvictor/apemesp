<?php

namespace Apemesp\Apemesp\Repositories\Apemesp;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use DB;

class UserRepository
{
	public function create($request)
	{
                $user = User::where('email', $request->email)->get();
                if ( empty($user[0]->id) ) {
                        $newUser = new User;
                        $newUser->name = $request->name;
                        $newUser->email = $request->email;
                        $newUser->id_perfil = 4;
                        $newUser->password = bcrypt($request->password);
                        $newUser->id_status = 1;
                        $newUser->save();
                } else {
                        return false;
                }
                if (!empty($newUser->id)) {
                        return true;
                } else {
                        return false;
                }
	}
}