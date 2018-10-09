<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoyneEasyCacheItemsTable extends Migration
{
	public function up()
	{
		Schema::create('goyne_easycache_items', function(Blueprint $t)
		{
			$t->increments('id')->unsigned();
			$t->integer('domain_id')->unsigned();
			$t->text('slug', 255);
			$t->text('name', 255);
			$t->text('description', 255);
			$t->integer('comments_total')->unsigned()->default(0);
			$t->enum('status', ['active', 'pending', 'deleted']);
			$t->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('goyne_easycache_items');
	}
}
