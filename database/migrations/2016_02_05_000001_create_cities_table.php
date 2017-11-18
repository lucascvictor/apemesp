<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cidades', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('id_estado')->unsigned();
            $table->string('nome', 64);
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

        Schema::drop('cidades');

    }

}
