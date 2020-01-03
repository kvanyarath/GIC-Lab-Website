<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotoAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photo_albums', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name_en', 191)->nullable();
			$table->string('name_kh', 191)->nullable();
			$table->date('posted_date')->nullable();
			$table->text('text_desc_en', 65535)->nullable();
			$table->text('text_desc_kh', 65535)->nullable();
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
		Schema::drop('photo_albums');
	}

}
