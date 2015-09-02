<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescripcionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('descripcion', function(Blueprint $table)
		{
			$table->increments('idDescripcion');
			$table->string('titulo', 50);
			$table->string('descripcion');
			$table->string('idioma');
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
		Schema::drop('descripcion');
	}

}
