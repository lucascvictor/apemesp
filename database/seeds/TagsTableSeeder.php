<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();
        DB::table('tags')->insert([
                0 => [
                    'id'             => 1,
                    'tag'           => 'Eventos',
                   
                ],

                1 => [
                    'id'             => 2,
                    'tag'           => 'Noticias',

                ],

                2 => [
                    'id'             => 3,
          	        'tag'           => 'Palestras',

                ],

                3 => [
                    'id'             => 4,
                    'tag'           => 'Livros',

                ],

                4 => [
                    'id'             => 5,
                    'tag'           => 'Cursos',
                ],


            ]);
    }
}
