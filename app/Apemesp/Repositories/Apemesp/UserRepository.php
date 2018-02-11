<?php

namespace Apemesp\Apemesp\Repositories\Apemesp;


use Apemesp\Http\Requests;

use Apemesp\Apemesp\Models\User;

use Apemesp\Apemesp\Models\AditionalUserData;

use DB;

class UserRepository
{
        protected $data;

	public function __construct()
	{
		$this->setData();
	}

	public function getData()
	{
		return $this->data;
	}

	public function setData()
	{
		$this->data = date("d-m-Y H:i:s");
	}

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
                $user = $this->findUserById($id_user);

                if (empty($user[0])) {
                        $aud = new AditionalUserData;
                        $aud->id_user = $id_user;
                        $aud->confirm_mail = 2;
                        $aud->code = $code;
                        $aud->save();
                } else {
                        $this->updateCodeById($id_user, $code);
                }
                
        }

        public function newResetCode($id_user, $code)
        {
                AditionalUserData::where('id', $id)->update(['resetcode' => $code,'updated_at' => $this->getData()]);
        }



        //return $id from aditional_users_data
        public function findCode($code)
        {
                return AditionalUserData::where('code', $code)->select('id')->get()->first();
        }

        public function findUserById($id)
        {
                return AditionalUserData::where('id_user', $id)->get()->first();
        }

        public function findAditionalUserByEmail($email)
        {
                return User::where('email', '=', $email)->select('id', 'name', 'email')->get()->first();
        }

        public function updateAditionalUserData($id)
        {
                AditionalUserData::where('id', $id)->update(['confirm_mail' => 1]);
        }

        public function updateCodeById($id, $code)
        {
                AditionalUserData::where('id', $id)->update(['code' => $code,'updated_at' => $this->getData()]);
        }

        public function confirmCodeById($id)
        {
                $cc = $this->findUserById($id);

                if(empty($cc)) {
                        return 2;
                }
                if ($cc->confirm_mail == 1) {
                        return 1;
                } else {
                        return 2;
                }
        }

}