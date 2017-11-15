<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComissoesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comissoes_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_comissao')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->string('titulo');
            $table->integer('ano');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comissoes_users');
    }
}
