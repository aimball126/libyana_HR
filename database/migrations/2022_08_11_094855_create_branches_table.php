<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name', 50);
			$table->smallInteger('city')->nullable();
			$table->string('address', 50);
			$table->integer('mobile');
			$table->integer('mobile2')->nullable();
			$table->string('email', 50)->nullable();
			$table->string('logo')->nullable();
			$table->string('map')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
