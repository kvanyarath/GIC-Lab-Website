<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faq_types', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('typename_kh', 191)->nullable();
			$table->string('typename_en', 191)->nullable();
			$table->timestamps();
			$table->bigInteger('faq_parent_type_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('faq_types');
	}

}
