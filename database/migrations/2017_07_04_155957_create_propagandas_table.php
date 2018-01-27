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
            $table->string('titulo');
            $table->string('link');
            $table->string('imagem');
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
        Schema::drop('propagandas');
    }
}
