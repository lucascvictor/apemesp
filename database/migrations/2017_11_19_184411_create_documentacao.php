<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('documentacao', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_user')->unsigned();
          $table->integer('rg')->default(0);
          $table->integer('cpf')->default(0);
          $table->integer('cnh')->default(0);
          $table->integer('comprovante_e')->default(0);
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
        Schema::drop('documentacao');
    }
}
