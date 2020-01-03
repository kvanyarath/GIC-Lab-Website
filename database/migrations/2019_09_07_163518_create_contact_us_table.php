<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactUsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_us', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('contactUs_description');
			$table->string('institute_address', 191);
			$table->string('email', 191);
			$table->string('phone', 191);
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
		Schema::drop('contact_us');
	}

}
