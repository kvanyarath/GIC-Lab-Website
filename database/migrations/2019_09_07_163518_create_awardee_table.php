<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAwardeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('awardee', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('profile_photo', 65535);
			$table->text('full_name', 65535);
			$table->text('text_description');
			$table->integer('id_academic_year');
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
		Schema::drop('awardee');
	}

}
