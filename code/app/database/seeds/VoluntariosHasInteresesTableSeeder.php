<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VoluntariosHasInteresesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 2000) as $index)
		{
			VoluntarioInteres::create([
                            'idVoluntario' => $faker->numberBetween(1, 500),
                            'idInteres' => $faker->numberBetween(1,20),
			]);
		}
	}

}