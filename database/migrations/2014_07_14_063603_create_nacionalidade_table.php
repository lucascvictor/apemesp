<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNacionalidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("nacionalidade",function(Blueprint $table){
		//    $table->engine = 'InnoDB';
		    $table->increments("id");
		    $table->string("nacionalidade");
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
        	Schema::dropIfExists("nacionalidade");
	}

}
