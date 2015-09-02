<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoHerramientaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipoHerramienta', function(Blueprint $table)
		{
			$table->increments('idTipoHerramienta');
			$table->string('nombre');
			$table->integer('fk_idModeloMaquinaria')->unsigned();
			$table->foreign('fk_idModeloMaquinaria')->references('idModeloMaquinaria')
            ->on('modeloMaquinaria')->onDelete('cascade');
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
		Schema::drop('tipoHerramienta');
	}

}
