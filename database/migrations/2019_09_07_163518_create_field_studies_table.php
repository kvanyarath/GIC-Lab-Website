<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFieldStudiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('field_studies', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title_en', 191)->nullable();
			$table->string('title_kh', 191)->nullable();
			$table->text('text_detail_en', 16777215)->nullable();
			$table->text('text_detail_kh', 16777215)->nullable();
			$table->bigInteger('degree_id')->unsigned()->nullable()->index('field_studies_degree_id_foreign');
			$table->timestamps();
			$table->text('entrance_selection_en', 16777215)->nullable();
			$table->text('entrance_selection_kh', 16777215)->nullable();
			$table->text('curriculum_en', 16777215)->nullable();
			$table->text('curriculum_kh', 16777215)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('field_studies');
	}

}
