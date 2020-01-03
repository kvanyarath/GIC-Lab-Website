<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGicServiceCounterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gic_service_counter', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('customer');
			$table->integer('projects');
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
		Schema::drop('gic_service_counter');
	}

}
