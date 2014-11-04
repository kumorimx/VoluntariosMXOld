<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FavoritosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Favorito::create([
                            'idEvento' => $faker->numberBetween(1, 20),
                            'idVoluntario' => $faker->numberBetween(1, 50),
			]);
		}
	}

}