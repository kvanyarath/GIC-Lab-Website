<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title_kh', 191)->nullable();
			$table->string('title_en', 191)->nullable();
			$table->text('detail_kh', 65535)->nullable();
			$table->text('detail_en', 65535)->nullable();
			$table->timestamps();
			$table->string('thumbnail', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
