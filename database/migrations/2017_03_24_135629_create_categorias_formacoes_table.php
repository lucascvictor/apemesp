<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasFormacoesTable extends Migration
{
    public function up()
    {
        Schema::create('categorias_formacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria');
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
        Schema::destroy('categorias');
    }
}
