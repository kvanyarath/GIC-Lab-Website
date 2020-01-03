<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffPositionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staff_position', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('staff_position', 191);
			$table->timestamps();
			$table->string('group')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('staff_position');
	}

}
