<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('menus', function (Blueprint $table) {
			$table->id();
			$table->string('name', 25);
			$table->foreignId('category_id');
			$table->integer('stock');
			$table->boolean('status');
			$table->integer('price');
			$table->string('image', 100)->nullable($value = true);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('menus');
	}
}
