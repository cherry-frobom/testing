<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductProductSettingsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_product_settings', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('product_id')->unsigned()->nullable();
			$table->foreign('product_id')->references('id')
			->on('products')->onDelete('cascade');

			$table->integer('product_setting_id')->unsigned()->nullable();
			$table->foreign('product_setting_id')->references('id')
			->on('product_settings')->onDelete('cascade');

			$table->string('value');
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
		Schema::dropIfExists('product_product_settings');
	}
}
