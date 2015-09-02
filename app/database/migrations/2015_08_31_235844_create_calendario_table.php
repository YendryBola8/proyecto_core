<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calendario', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			$table->increments('idCalendario');
			$table->date('fechaEntrega');
			$table->date('fechaDevolucion');
			$table->decimal('precio', 10,2);
			$table->decimal('precioHora', 10,2);
			$table->decimal('precioDia', 10,2);
			$table->decimal('precioSemana', 10,2);
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
		Schema::drop('calendario');
	}

}
