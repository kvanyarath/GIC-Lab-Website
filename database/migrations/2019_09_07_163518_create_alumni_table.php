<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlumniTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumni', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->char('alumni_name', 100);
			$table->text('photo')->nullable();
			$table->integer('alumniGeneration');
			$table->text('alumniMail', 65535)->nullable();
			$table->integer('alumniPhoneNumber')->nullable();
			$table->text('alumniWorkCom', 65535)->nullable();
			$table->text('alumniWorkingField', 65535);
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
		Schema::drop('alumni');
	}

}
