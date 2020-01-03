<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAluminusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aluminus', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('gratuate_year');
			$table->text('profile_photo', 65535);
			$table->text('name', 65535);
			$table->timestamps();
			$table->bigInteger('promotion_year_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aluminus');
	}

}
