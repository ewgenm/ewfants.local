<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreferencesTable extends Migration {

	public function up()
	{
		Schema::create('preferences', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 40);
			$table->timestamps();
			$table->tinyInteger('preference_gender');
		});
	}

	public function down()
	{
		Schema::drop('preferences');
	}
}