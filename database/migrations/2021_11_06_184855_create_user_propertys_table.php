<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserPropertysTable extends Migration {

	public function up()
	{
		Schema::create('user_propertys', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->tinyInteger('gender_id');
			$table->smallInteger('age')->default('0');
			$table->smallInteger('weight');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('user_propertys');
	}
}
