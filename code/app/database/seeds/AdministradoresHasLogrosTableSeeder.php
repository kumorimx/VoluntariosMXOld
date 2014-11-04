<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdministradoresHasLogrosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			AdministradorLogro::create([
                            'idAdministrador' => $faker->numberBetween(1, 50),
                            'idLogro' => $faker->numberBetween(1, 50),
			]);
		}
	}

}