<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimetableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timetable', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('timetable', 65535);
			$table->text('year', 65535);
			$table->text('semester', 65535);
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
		Schema::drop('timetable');
	}

}
