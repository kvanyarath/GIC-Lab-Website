<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAboutUsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('about_us', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('welcome_back_description');
			$table->string('aboutUs_welcome_photo', 191);
			$table->text('aboutUs_description');
			$table->text('history');
			$table->string('history_photo', 191);
			$table->string('partnership_title', 191);
			$table->text('partnership_description');
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
		Schema::drop('about_us');
	}

}
