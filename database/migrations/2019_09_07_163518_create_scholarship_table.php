<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScholarshipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scholarship', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title', 191);
			$table->text('scholarship_description');
			$table->string('scholarship_image', 191);
			$table->string('scholarship_image_description', 191);
			$table->string('scholarship_reference_url', 191);
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
		Schema::drop('scholarship');
	}

}
