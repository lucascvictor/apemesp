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
        DB::table('aditional_users_data')->delete();
    }
}
