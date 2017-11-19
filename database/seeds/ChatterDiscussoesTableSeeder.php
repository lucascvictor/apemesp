<?php

use Illuminate\Database\Seeder;

class ChatterDiscussoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CREATE THE DISCUSSIONS

        \DB::table('chatter_discussion')->delete();

        \DB::table('chatter_discussion')->insert([
            0 => [
                'id'                  => 1,
                'chatter_category_id' => 4,
                'title'               => 'Olá pessoal! Sejam Bem-vindos',
                'user_id'             => 303,
                'sticky'              => 0,
                'views'               => 0,
                'answered'            => 0,
                'created_at'          => '2016-08-18 14:27:56',
                'updated_at'          => '2016-08-18 14:27:56',
                'slug'                => 'hello-everyone-this-is-my-introduction',
                'color'               => '#239900',
            ],
            1 => [
                'id'                  => 2,
                'chatter_category_id' => 4,
                'title'               => 'Informações de Login para associados',
                'user_id'             => 303,
                'sticky'              => 0,
                'views'               => 0,
                'answered'            => 0,
                'created_at'          => '2016-08-18 14:39:36',
                'updated_at'          => '2016-08-18 14:39:36',
                'slug'                => 'login-information-for-chatter',
                'color'               => '#1a1067',
            ],

        ]);
    }
}
