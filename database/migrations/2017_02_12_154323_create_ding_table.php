<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDingTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('dings', function (Blueprint $table) {
			$table->unsignedInteger('id')->primary();
			$table->string('term');
			$table->unsignedSmallInteger('book');
			$table->unsignedInteger('page');
			$table->unsignedInteger('notes');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('dings');
	}
}
