<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoModuloTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipoModulo', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			$table->increments('idTipoModulo');
			$table->string('nombre', 50);
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
		Schema::drop('tipoModulo');
	}

}
