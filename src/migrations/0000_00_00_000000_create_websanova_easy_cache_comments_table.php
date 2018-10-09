<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoyneEasyCacheCommentsTable extends Migration
{
	public function up()
	{
		Schema::create('goyne_easycache_comments', function(Blueprint $t)
		{
			$t->increments('id')->unsigned();
			$t->integer('domain_id')->unsigned();
			$t->integer('item_id')->unsigned();
			$t->text('slug', 255);
			$t->text('title', 255);
			$t->text('body', 255);
			$t->enum('status', ['active', 'pending', 'deleted']);
			$t->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('goyne_easycache_comments');
	}
}
