<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqParentTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faq_parent_types', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('label_en', 191)->nullable();
			$table->string('label_kh', 191)->nullable();
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
		Schema::drop('faq_parent_types');
	}

}
