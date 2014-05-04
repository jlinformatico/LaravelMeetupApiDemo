<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AuthorsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		DB::table('authors')->truncate();

		foreach(range(1, 10) as $index)
		{
			Author::create([
				'name'=> $faker->firstName()
			]);
		}
	}

}