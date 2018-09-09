<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProximidadeGeograficaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proximidade_geografica', function (Blueprint $table) {
            $table->increments('id');
            $table->string('localidade');
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
        Schema::drop('proximidade_geografica');
    }
}
