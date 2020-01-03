<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReportSlideTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report_slide', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('title_en', 65535);
			$table->text('title_kh', 65535);
			$table->text('file_location', 65535);
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
		Schema::drop('report_slide');
	}

}
