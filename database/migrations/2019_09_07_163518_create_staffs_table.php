<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staffs', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('fullname_en', 191)->nullable();
			$table->string('fullname_kh', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('phone_number', 191)->nullable();
			$table->string('profile_picture', 191)->nullable();
			$table->string('cv_file_location', 191)->nullable();
			$table->text('biography', 65535)->nullable();
			$table->bigInteger('id_groupuser')->unsigned()->nullable();
			$table->timestamps();
			$table->integer('position')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('staffs');
	}

}
