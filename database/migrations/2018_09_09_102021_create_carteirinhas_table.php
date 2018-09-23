<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarteirinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carteirinhas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('digito');
            $table->integer('numero');
            $table->integer('status');
            $table->integer('japossui');
            $table->text('observacao');
            $table->date('data_pedido')->nullable();
            $table->date('data_confeccao')->nullable();
            $table->date('data_ultimavia')->nullable();
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
        Schema::drop('carteirinhas');
    }
}
