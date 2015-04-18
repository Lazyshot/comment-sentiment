<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fb_id');
			$table->bigInteger('page_id');

			$table->string('message');
			$table->string('picture');

			$table->bigInteger('likes');

			$table->timestamp('updated_time');
			$table->timestamps();

			$this->foreign('page_id')->references('id')->on('pages');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
