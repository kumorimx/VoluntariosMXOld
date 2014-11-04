<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventosHasInteresesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 1000) as $index)
		{
			EventoInteres::create([
                            'idEvento' => $faker->numberBetween(1, 100),
                            'idInteres' => $faker->numberBetween(1, 50),
			]);
		}
	}

}