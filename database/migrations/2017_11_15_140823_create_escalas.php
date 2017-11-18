<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('escalas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('escala');
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
        Schema::drop('escalas');
    }
}
