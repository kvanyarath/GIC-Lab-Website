<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurriculumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curriculums', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('curriculum_kh', 65535)->nullable();
			$table->text('curriculum_en', 65535)->nullable();
			$table->bigInteger('field_study_id')->unsigned()->nullable()->index('curriculums_field_study_id_foreign');
			$table->bigInteger('program_year_id')->unsigned()->nullable()->index('curriculums_program_year_id_foreign');
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
		Schema::drop('curriculums');
	}

}
