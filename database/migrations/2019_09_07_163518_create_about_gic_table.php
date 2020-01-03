<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAboutGicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('about_gic', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('location_map', 191)->nullable();
			$table->string('facebook_page', 191)->nullable();
			$table->string('youtube_url', 191)->nullable();
			$table->string('twitter_url', 191)->nullable();
			$table->string('instagram_url', 191)->nullable();
			$table->string('linkedin_url', 191)->nullable();
			$table->string('contact_email', 191)->nullable();
			$table->string('contact_phone', 191)->nullable();
			$table->text('about_us_text_en', 65535)->nullable();
			$table->text('about_us_text_kh', 65535)->nullable();
			$table->text('mission_en', 65535)->nullable();
			$table->text('mission_kh', 65535)->nullable();
			$table->text('vision_en', 65535)->nullable();
			$table->text('vision_kh', 65535)->nullable();
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
		Schema::drop('about_gic');
	}

}
