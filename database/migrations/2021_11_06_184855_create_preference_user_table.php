<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreferenceUserTable extends Migration {

	public function up()
	{
		Schema::create('preference_user', function(Blueprint $table) {
			$table->integer('preference_id');
			$table->integer('user_id');
			$table->tinyInteger('level');
		});
	}

	public function down()
	{
		Schema::drop('preference_user');
	}
}