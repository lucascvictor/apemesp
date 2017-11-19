<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->integer('id_perfil')->unsigned()->default(4);
            $table->integer('id_status')->unsigned()->default(0);
            $table->integer('id_cadastro')->unsigned()->default(1);
            $table->integer('opcao_dados_profissionais')->default(0); //0- Dados Profissionais Ativos; 1- Dados profissionais inativos
            $table->integer('D_E_L_E_T_E_D')->defatul(0);
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
        Schema::drop('users');
    }
}
