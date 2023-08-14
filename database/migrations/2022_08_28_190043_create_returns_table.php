<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReturnsTable extends Migration {

	public function up()
	{
		Schema::create('returns', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->mediumInteger('item_id');
			$table->string('type', 10);
			$table->string('name', 60);
			$table->smallInteger('quant');
			$table->char('mobile', 10);
		});
	}

	public function down()
	{
		Schema::drop('returns');
	}
}