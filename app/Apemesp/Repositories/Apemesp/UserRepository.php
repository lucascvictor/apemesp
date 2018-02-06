<?php

namespace Apemesp\Apemesp\Repositories\Apemesp;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\AditionalUserData;

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
                        return $newUser->id;
                } else {
                        return false;
                }
        }
        
        public function storeCode($id_user, $code)
        {
                $aud = new AditionalUserData;
                $aud->id_user = $id_user;
                $aud->confirm_mail = 2;
                $aud->code = $code;
                $aud->save();
        }


        //return $id from aditional_users_data
        public function findCode($code)
        {
                return AditionalUsersData::where('code', $code)->select('id')->get();
        }

        public function findUser($id)
        {
                return AditionalUsersData::where('id_user', $id)->get();
        }

        public function update($id)
        {
                AditionalUserData::where('id', $id)->update(['confirm_mail' => 1,'updated_at' => $this->getData()]);
        }

}