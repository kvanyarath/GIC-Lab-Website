<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_messages', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('student_name', 100);
			$table->integer('user_id')->unsigned();
			$table->text('message_text', 65535)->nullable();
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
		Schema::drop('student_messages');
	}

}
