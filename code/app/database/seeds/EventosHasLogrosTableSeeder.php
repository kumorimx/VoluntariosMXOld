<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventosHasLogrosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			EventoLogro::create([
                            'idEvento' => $faker->numberBetween(1, 20),
                            'idLogro' => $faker->numberBetween(1, 50),
                            'puntaje' => $faker->numberBetween(50, 500),
                            'aumentarRecord' => $faker->numberBetween(1, 10),
			]);
		}
	}

}