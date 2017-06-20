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
                'chatter_category_id' => 1,
                'title'               => 'Hello Everyone, This is my Introduction',
                'user_id'             => 1,
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
                'chatter_category_id' => 2,
                'title'               => 'Login Information for Chatter',
                'user_id'             => 1,
                'sticky'              => 0,
                'views'               => 0,
                'answered'            => 0,
                'created_at'          => '2016-08-18 14:39:36',
                'updated_at'          => '2016-08-18 14:39:36',
                'slug'                => 'login-information-for-chatter',
                'color'               => '#1a1067',
            ],
            2 => [
                'id'                  => 3,
                'chatter_category_id' => 3,
                'title'               => 'Leaving Feedback',
                'user_id'             => 1,
                'sticky'              => 0,
                'views'               => 0,
                'answered'            => 0,
                'created_at'          => '2016-08-18 14:42:29',
                'updated_at'          => '2016-08-18 14:42:29',
                'slug'                => 'leaving-feedback',
                'color'               => '#8e1869',
            ],
            3 => [
                'id'                  => 4,
                'chatter_category_id' => 4,
                'title'               => 'Just a random post',
                'user_id'             => 1,
                'sticky'              => 0,
                'views'               => 0,
                'answered'            => 0,
                'created_at'          => '2016-08-18 14:46:38',
                'updated_at'          => '2016-08-18 14:46:38',
                'slug'                => 'just-a-random-post',
                'color'               => '#8e1869',
            ],
            4 => [
                'id'                  => 5,
                'chatter_category_id' => 2,
                'title'               => 'Welcome to the Chatter Laravel Forum Package',
                'user_id'             => 1,
                'sticky'              => 0,
                'views'               => 0,
                'answered'            => 0,
                'created_at'          => '2016-08-18 14:59:37',
                'updated_at'          => '2016-08-18 14:59:37',
                'slug'                => 'welcome-to-the-chatter-laravel-forum-package',
                'color'               => '#8e1869',
            ],
        ]);
    }
}
