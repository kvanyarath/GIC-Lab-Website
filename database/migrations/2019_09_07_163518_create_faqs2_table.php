<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqs2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faqs2', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('question_kh', 191)->nullable();
			$table->string('question_en', 191)->nullable();
			$table->text('answer_kh', 65535)->nullable();
			$table->text('answer_en', 65535)->nullable();
			$table->bigInteger('faq_type_id')->unsigned()->nullable();
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
		Schema::drop('faqs2');
	}

}
