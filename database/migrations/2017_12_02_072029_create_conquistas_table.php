<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConquistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('conquistas', function (Blueprint $table) {
         $table->increments('id');
         $table->string('titulo');
         $table->text('conteudo');
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
         Schema::drop('conquistas');
     }
}
