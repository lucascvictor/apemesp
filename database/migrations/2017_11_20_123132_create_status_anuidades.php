<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusAnuidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('status_anuidade', function (Blueprint $table) {
        $table->increments('id');
        $table->string('descricao');
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
        Schema::drop('status_anuidades');
    }
}
