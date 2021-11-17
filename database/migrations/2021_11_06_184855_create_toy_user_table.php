<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateToyUserTable extends Migration {

	public function up()
	{
		Schema::create('toy_user', function(Blueprint $table) {
			$table->integer('toy_id');
			$table->integer('user_id');
		});
	}

	public function down()
	{
		Schema::drop('toy_user');
	}
}