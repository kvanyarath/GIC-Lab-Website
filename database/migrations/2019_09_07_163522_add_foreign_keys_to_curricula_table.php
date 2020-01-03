<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCurriculaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('curricula', function(Blueprint $table)
		{
			$table->foreign('degree_id')->references('id')->on('degrees')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('curricula', function(Blueprint $table)
		{
			$table->dropForeign('curricula_degree_id_foreign');
		});
	}

}
