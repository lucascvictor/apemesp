<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdicoesJomesp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('edicoes_jomesp', function (Blueprint $table) {
        $table->increments('id');
        $table->string('arquivo');
        $table->string('edicao');
        $table->string('linkexterno');
        $table->timestamps();
        $table->integer('D_E_L_E_T_E_D')->defatul(0); //0-Não; 1-Sim
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('edicoes_jomesp');
    }
}
