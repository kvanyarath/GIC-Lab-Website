<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateGicServiceCounterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gic_service_counter', function(Blueprint $table) {
            $table->text('customer')->nullable()->change();
			$table->text('projects')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gic_service_counter', function(Blueprint $table) {
            $table->integer('customer')->change();
			$table->integer('projects')->change();
        });
    }
}
