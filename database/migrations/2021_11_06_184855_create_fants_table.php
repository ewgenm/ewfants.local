<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFantsTable extends Migration {

	public function up()
	{
		Schema::create('fants', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 50);
			$table->text('article');
			$table->tinyInteger('level');
			$table->tinyInteger('gender');
			$table->smallInteger('age_min')->default('18');
			$table->smallInteger('age_max')->default('60');
			$table->string('weight_min', 40);
			$table->smallInteger('weight_max')->default('120');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('fants');
	}
}