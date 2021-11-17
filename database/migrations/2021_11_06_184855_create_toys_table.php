<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateToysTable extends Migration {

	public function up()
	{
		Schema::create('toys', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 40);
			$table->timestamps();
			$table->tinyInteger('toy_gender');
		});
	}

	public function down()
	{
		Schema::drop('toys');
	}
}