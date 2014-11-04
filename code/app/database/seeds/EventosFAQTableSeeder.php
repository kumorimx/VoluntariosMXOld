<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventosFAQTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 1000) as $index)
		{
			EventoFAQ::create([
                            'idEvento' => $faker->numberBetween(1, 20),
                            'pregunta' => '¿'.$faker->sentence(8).'?',
                            'respuesta' => $faker->sentence(20),
			]);
		}
	}

}