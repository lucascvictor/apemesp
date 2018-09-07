<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnuidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('anuidades', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_user')->unsigned();
        $table->string('comprovante')->nullable();
        $table->integer('arq_enviado')->default(0); //0-Não; 1-Sim
        $table->integer('arq_avaliado')->default(0); //0-Não; 1-Sim
        $table->integer('ano')->default(2017);
        $table->integer('status')->default(1);
        $table->integer('meslimite')->default(8);
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
        Schema::drop('anuidades');
    }
}
