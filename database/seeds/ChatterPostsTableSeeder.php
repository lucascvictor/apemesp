<?php

use Illuminate\Database\Seeder;

class ChatterPostsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {

        // CREATE THE POSTS

         \DB::table('chatter_post')->delete();

        \DB::table('chatter_post')->insert([
                    0 => [
                        'id'                    => 1,
                        'chatter_discussion_id' => 3,
                        'user_id'               => 1,
                        'body'                  => '<p>Bem-vindos ao forum da APEMESP nosso site se destina a orientar e promover musicoterapeutas do estado de São Paulo <a href="https://apemesp.com.br" target="_blank">APEMESP</a> Trabalhamos com uma equipe de profissionais qualificados para melhor atender Mt\'s e pacientes</p>
        <p>Você pode conferir nossa página no<a href="http://www.facebook.com/apemesp" target="_blank">Facebook</a></p>',
                        'created_at' => '2016-08-18 14:27:56',
                        'updated_at' => '2016-08-18 14:27:56',
                    ],
                    1 => [
                        'id'                    => 5,
                        'chatter_discussion_id' => 2,
                        'user_id'               => 1,
                        'body'                  => '<p>Hey!</p>
        <p>Thanks again for checking out chatter. If you want to login with the default user you can login with the following credentials:</p>
        <p><strong>email address</strong>: tony@hello.com</p>
        <p><strong>password</strong>: password</p>
        <p>You\'ll probably want to delete this user, but if for some reason you want to keep it... Go ahead :)</p>',
                    'created_at' => '2016-08-18 14:39:36',
                    'updated_at' => '2016-08-18 14:39:36',
                ],
                2 => [
                    'id'                    => 6,
                    'chatter_discussion_id' => 5,
                    'user_id'               => 1,
                    'body'                  => '<p>If you would like to leave some feedback or have any issues be sure to visit the github page here: <a href="https://github.com/thedevdojo/chatter" target="_blank">https://github.com/thedevdojo/chatter</a>&nbsp;and I\'m sure I can help out.</p>
        <p>Let\'s make this package the go to Laravel Forum package. Feel free to contribute and share your ideas :)</p>',
                'created_at' => '2016-08-18 14:42:29',
                'updated_at' => '2016-08-18 14:42:29',
            ],
            3 => [
                'id'                    => 7,
                'chatter_discussion_id' => 5,
                'user_id'               => 1,
                'body'                  => '<p>This is just a random post to show you some of the formatting that you can do in the WYSIWYG editor. You can make your text <strong>bold</strong>, <em>italic</em>, or <span style="text-decoration: underline;">underlined</span>.</p>
        <p style="text-align: center;">Additionally, you can center align text.</p>
        <p style="text-align: right;">You can align the text to the right!</p>
        <p>Or by default it will be aligned to the left.</p>
        <ul>
        <li>We can also</li>
        <li>add a bulleted</li>
        <li>list</li>
        </ul>
        <ol>
        <li><span style="line-height: 1.6;">or we can</span></li>
        <li><span style="line-height: 1.6;">add a numbered list</span></li>
        </ol>
        <p style="padding-left: 30px;"><span style="line-height: 1.6;">We can choose to indent our text</span></p>
        <p><span style="line-height: 1.6;">Post links: <a href="https://devdojo.com" target="_blank">https://devdojo.com</a></span></p>
        <p><span style="line-height: 1.6;">and add images:</span></p>
        <p><span style="line-height: 1.6;"><img src="https://media.giphy.com/media/o0vwzuFwCGAFO/giphy.gif" alt="" width="300" height="300" /></span></p>',
                'created_at' => '2016-08-18 14:46:38',
                'updated_at' => '2016-08-18 14:46:38',
            ],
            4 => [
                'id'                    => 8,
                'chatter_discussion_id' => 4,
                'user_id'               => 1,
            'body'                      => '<p>Haha :) Cats!</p>
        <p><img src="https://media.giphy.com/media/5Vy3WpDbXXMze/giphy.gif" alt="" width="250" height="141" /></p>
        <p><img src="https://media.giphy.com/media/XNdoIMwndQfqE/200.gif" alt="" width="200" height="200" /></p>',
            'created_at' => '2016-08-18 14:55:42',
            'updated_at' => '2016-08-18 15:45:13',
        ],
        5 => [
            'id'                    => 9,
            'chatter_discussion_id' => 1,
            'user_id'               => 1,
            'body'                  => '<p>Hey There!</p>
        <p>My name is Tony and I\'m the creator of this package that you\'ve just installed. Thanks for checking out it out and if you have any questions or want to contribute be sure to checkout the repo here: <a href="https://github.com/thedevdojo/chatter" target="_blank">https://github.com/thedevdojo/chatter</a></p>
        <p>Happy programming!</p>',
            'created_at' => '2016-08-18 14:59:37',
            'updated_at' => '2016-08-18 14:59:37',
        ],
        6 => [
            'id'                    => 10,
            'chatter_discussion_id' => 4,
            'user_id'               => 1,
            'body'                  => '<p>Hell yeah Bro Sauce!</p>
        <p><img src="https://media.giphy.com/media/j5QcmXoFWl4Q0/giphy.gif" alt="" width="366" height="229" /></p>',
            'created_at' => '2016-08-18 15:01:25',
            'updated_at' => '2016-08-18 15:01:25',
        ],
        ]);
    }
}
