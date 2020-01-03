<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImportantLinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('important_link', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('title_en', 65535);
			$table->text('title_kh', 65535);
			$table->text('url', 65535);
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
		Schema::drop('important_link');
	}

}
