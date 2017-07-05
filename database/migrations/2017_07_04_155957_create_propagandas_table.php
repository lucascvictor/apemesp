<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropagandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propagandas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagem');
            $table->string('link');
            $table->string('frase');
            $table->string('titulo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('propagandas');
    }
}
