<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScholarshipAdvisorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scholarship_advisor', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('alumini_id');
			$table->text('description');
			$table->text('comment');
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
		Schema::drop('scholarship_advisor');
	}

}
