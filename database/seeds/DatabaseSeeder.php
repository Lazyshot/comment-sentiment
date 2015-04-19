<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CommentSentiment\Page;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('pages')->truncate();

		Page::create([
			'id' => 102662719805111,
			'name' => 'Being Mommy',
			'picture' => 'https://graph.facebook.com/beingmommy/picture',
			'likes' => 1000000,
		]);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
