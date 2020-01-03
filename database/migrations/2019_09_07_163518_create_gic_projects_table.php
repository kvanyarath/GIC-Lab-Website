<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGicProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gic_projects', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title_en', 191)->nullable();
			$table->string('title_kh', 191)->nullable();
			$table->string('thumbnail', 191)->nullable();
			$table->text('description_en', 65535)->nullable();
			$table->text('description_kh', 65535)->nullable();
			$table->boolean('ongoing_project')->nullable();
			$table->timestamps();
			$table->text('short_desc_en', 65535)->nullable();
			$table->text('short_desc_kh', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gic_projects');
	}

}
