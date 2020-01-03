<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLearningProgramTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('learning_program', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title', 191);
			$table->text('description');
			$table->string('program_link', 191);
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
		Schema::drop('learning_program');
	}

}
