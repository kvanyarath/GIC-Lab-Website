<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_project', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('project_title', 65535);
			$table->text('project_cover', 65535);
			$table->text('type', 65535);
			$table->text('academic_year', 65535);
			$table->text('short_description', 65535);
			$table->text('long_description');
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
		Schema::drop('student_project');
	}

}
