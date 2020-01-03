<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCurriculaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curricula', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('degree_id')->unsigned()->nullable()->index('curricula_degree_id_foreign');
			$table->string('duration_en', 191)->nullable();
			$table->string('duration_kh', 191)->nullable();
			$table->text('detail_en', 65535)->nullable();
			$table->text('detail_kh', 65535)->nullable();
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
		Schema::drop('curricula');
	}

}
