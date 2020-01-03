<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScholarshipAluminiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scholarship_alumini', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('alumini_id');
			$table->string('title', 191);
			$table->text('scholarship_description');
			$table->text('scholarship_program');
			$table->text('life_overthere');
			$table->timestamps();
			$table->integer('country');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('scholarship_alumini');
	}

}
