<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title_kh', 191)->nullable();
			$table->string('title_en', 191)->nullable();
			$table->string('thumbnail', 191)->nullable();
			$table->text('description_kh', 65535)->nullable();
			$table->text('description_en', 65535)->nullable();
			$table->date('posted_date')->nullable();
			$table->timestamps();
			$table->text('subtitle_kh', 65535)->nullable();
			$table->text('subtitle_en', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('news');
	}

}
