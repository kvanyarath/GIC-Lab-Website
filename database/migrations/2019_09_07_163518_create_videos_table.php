<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title_en', 191)->nullable();
			$table->string('title_kh', 191)->nullable();
			$table->text('description_en', 65535)->nullable();
			$table->text('description_kh', 65535)->nullable();
			$table->string('video_file', 191)->nullable();
			$table->date('posted_date')->nullable();
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
		Schema::drop('videos');
	}

}
