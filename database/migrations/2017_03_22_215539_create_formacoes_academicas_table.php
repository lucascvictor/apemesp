<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormacoesAcademicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacoes_academicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_categoria_formacao')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->integer('id_cidade')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->string('nomeies');
            $table->string('titulo');
            $table->string('anodeconclusao');
            $table->string('titulotcc');
            $table->string('arquivotcc')->nullable();
            $table->string('certificado')->nullable();
            $table->text('atividades');
            $table->text('cargahoraria')->nullable();
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
        Schema::drop('formacoes_academicas');
    }
}
