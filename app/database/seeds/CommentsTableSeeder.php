<?php


use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		DB::table('comments')->truncate();

		foreach(range(1, 100) as $index)
		{
			Comment::create([
				'comment_author_name'=>$faker->userName,
				'post_id' => $faker->randomNumber(1,50),
				'comment' => $faker->paragraph()
			]);
		}
	}

}