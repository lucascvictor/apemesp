<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosPessoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_pessoais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('name');
            $table->string('foto');
            $table->integer('id_nacionalidade')->unsigned();
            $table->string('rg');
            $table->date('nascimento');
            $table->string('cpf');
            $table->string('facebook')->nullable();
            $table->string('endereco');
            $table->string('bairro');
            $table->string('complemento')->nullable();
            $table->string('cep');
            $table->integer('id_cidade')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->string('tel_celular')->nullable();
            $table->string('tel_residencial')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dados_pessoais');
    }
}
