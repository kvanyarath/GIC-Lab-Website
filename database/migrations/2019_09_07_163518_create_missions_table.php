<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('missions', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('start_date', 191)->nullable();
			$table->string('end_date', 191)->nullable();
			$table->string('mission_place', 191)->nullable()->default('""');
			$table->text('description');
			$table->integer('id_staff');
			$table->timestamps();
			$table->integer('id_country');
			$table->integer('id_support_fund');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('missions');
	}

}
