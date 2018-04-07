<?php

use Illuminate\Database\Seeder;

class AditionalUserDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('aditional_users_data')->delete();
        DB::table('aditional_users_data')->insert([
            0=>[
             "id" =>1,
            "id_user" => 306 ,
            "confirm_mail" => "1",
            "code" => 10,
            "resetcode" => "8",
            "created_at" => $now,
            "updated_at" => $now,
            ],
            1=>[
            "id" =>2,
            "id_user" => 307 ,
            "confirm_mail" => "1",
            "code" => 101,
            "resetcode" => "8",
            "created_at" => $now,
            "updated_at" => $now,
            ],
            2=>[
            "id" =>3,
            "id_user" => 308 ,
            "confirm_mail" => "1",
            "code" => 1011,
            "resetcode" => "8",
            "created_at" => $now,
            "updated_at" => $now,
            ],
        ]);
    }
}
