<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScholarshipSliderImageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scholarship_slider_image', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('title');
			$table->text('title_important');
			$table->text('title_description');
			$table->text('image');
			$table->text('address');
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
		Schema::drop('scholarship_slider_image');
	}

}
