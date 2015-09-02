<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('foto', function(Blueprint $table)
		{
			$table->increments('idFoto');
			$table->string('nombre');
			$table->string('ruta');
			$table->integer('fk_idTipoPublicacion')->unsigned();
			$table->foreign('fk_idTipoPublicacion')->references('idTipoPublicacion')
            ->on('tipoPublicacion')->onDelete('cascade');
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
		Schema::drop('foto');
	}

}
