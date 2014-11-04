<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventosHasVoluntariosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 2000) as $index)
		{
			EventoVoluntario::create([
                            'idEvento' => $faker->numberBetween(1, 20),
                            'idVoluntario' => $faker->numberBetween(1, 500),
                            'calificacionVoluntario' => $faker->numberBetween(1, 10),
                            'calificacionAliado' => $faker->numberBetween(1, 10),
                            'solicitudConstancia' => $faker->numberBetween(0, 1),
                            'status' => 1,
			]);
		}
	}

}