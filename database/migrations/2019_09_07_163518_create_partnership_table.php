<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnershipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partnership', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name_p', 191);
			$table->string('address_p', 191);
			$table->string('url_p', 191);
			$table->string('logo_p', 191);
			$table->string('email', 191);
			$table->string('phone', 191);
			$table->string('website', 191);
			$table->boolean('type');
			$table->text('description_p');
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
		Schema::drop('partnership');
	}

}
