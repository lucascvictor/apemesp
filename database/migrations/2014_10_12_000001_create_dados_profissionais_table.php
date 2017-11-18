<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosProfissionaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_profissionais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('cep');
            $table->string('endereco');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->integer('id_cidade')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->integer('id_proximidade')->unsigned();
            $table->integer('id_especialidade')->unsigned();
            $table->string('linkedin')->nullable();
            $table->integer('telefone');
            $table->integer('id_dias_atendimento')->unsigned();
            $table->integer('n_registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dados_profissionais');
    }
}
