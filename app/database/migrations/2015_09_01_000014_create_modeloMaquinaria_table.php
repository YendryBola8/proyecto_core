<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloMaquinariaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modeloMaquinaria', function(Blueprint $table)
		{
			$table->increments('idModeloMaquinaria');
			$table->string('nombre',50);
			$table->integer('fk_idTipoModulo')->unsigned();
			$table->foreign('fk_idTipoModulo')->references('idTipoModulo')
            ->on('tipoModulo')->onDelete('cascade');
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
		Schema::drop('modeloMaquinaria');
	}

}
