<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_categoria', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_categoria')->unsigned();
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
        //
    }
}
