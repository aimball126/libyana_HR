<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleTable extends Migration {

	public function up()
	{
		Schema::create('sale', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 60);
			$table->char('mobile', 10);
			$table->char('mobile2', 10);
			$table->string('city', 20);
			$table->smallInteger('item_id');
			$table->smallInteger('quant');
			$table->double('price_delivery');
			$table->mediumText('notes');
		});
	}

	public function down()
	{
		Schema::drop('sale');
	}
}