<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VoluntariosHasLogrosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 2000) as $index)
		{
			VoluntarioLogro::create([
                            'idVoluntario' => $faker->numberBetween(1, 500),
                            'idLogro' => $faker->numberBetween(1,20),
                            'puntaje' => $faker->numberBetween(10, 100),
			]);
		}
	}

}