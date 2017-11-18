<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('estados', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nome', 64)->unique();
            $table->string('abrev', 2)->unique();
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

        Schema::drop('estados');

    }

}
