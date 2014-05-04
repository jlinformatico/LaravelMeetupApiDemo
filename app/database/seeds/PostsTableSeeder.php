<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		DB::table('posts')->truncate();

		foreach(range(1, 50) as $index)
		{
			Post::create([
				'title' => $faker->sentence(4),
				'content' => $faker->paragraph(),
				'author_id' => $faker->randomNumber(1, 10)
			]);
		}
	}

}