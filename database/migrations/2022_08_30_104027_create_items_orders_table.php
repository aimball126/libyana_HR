<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsOrdersTable extends Migration {

	public function up()
	{
		Schema::create('items_orders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->mediumInteger('item_id');
			$table->mediumInteger('quant');
		});
	}

	public function down()
	{
		Schema::drop('items_orders');
	}
}