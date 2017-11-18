<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->integer('id_user')->unsigned();
            $table->integer('id_tag')->unsigned();
            $table->integer('id_destino')->unsigned();
            $table->string('imagem_previa')->defatul('apemesp.png')->nullable();
            $table->text('previa')->nullable();
            $table->text('body');
            $table->timestamps();
            $table->integer('D_E_L_E_T_E_D')->defatul(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
