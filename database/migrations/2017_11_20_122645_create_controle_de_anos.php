<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControleDeAnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('controle_de_anos', function (Blueprint $table) {
        $table->integer('ano');
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
        Schema::drop('controle_de_anos');
    }
}
