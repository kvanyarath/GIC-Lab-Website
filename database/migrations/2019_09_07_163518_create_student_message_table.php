<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_message', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('name', 65535);
			$table->text('position', 65535);
			$table->text('photo_url', 65535);
			$table->text('posted_date', 65535);
			$table->timestamps();
			$table->text('content_kh', 16777215);
			$table->text('content_en', 16777215);
			$table->text('graduated_year', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_message');
	}

}
