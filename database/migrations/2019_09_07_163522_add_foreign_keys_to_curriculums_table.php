<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCurriculumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('curriculums', function(Blueprint $table)
		{
			$table->foreign('field_study_id')->references('id')->on('field_studies')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('program_year_id')->references('id')->on('program_years')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('curriculums', function(Blueprint $table)
		{
			$table->dropForeign('curriculums_field_study_id_foreign');
			$table->dropForeign('curriculums_program_year_id_foreign');
		});
	}

}
