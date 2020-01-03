<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFieldStudiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('field_studies', function(Blueprint $table)
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
		Schema::table('field_studies', function(Blueprint $table)
		{
			$table->dropForeign('field_studies_degree_id_foreign');
		});
	}

}
