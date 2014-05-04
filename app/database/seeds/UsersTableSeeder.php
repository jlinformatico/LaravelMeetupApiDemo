<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		DB::table('users')->truncate();

		foreach(range(1, 10) as $index)
		{
			User::create([
				'username' => 'user'.$index,
				'password' => Hash::make('1234')
			]);
		}
	}

}