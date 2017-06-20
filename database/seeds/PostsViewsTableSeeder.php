<?php

use Illuminate\Database\Seeder;

class PostsViewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts_views')->delete();
        DB::table('posts_views')->insert([
            [
                "id"        => 1,
                "total_visitas"    => 0,

            ],

        ]);
    }
}
