<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DependenciasHasLogrosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			DependenciaLogro::create([
                            'idDependencia' => $faker->numberBetween(1, 50),
                            'idLogro' => $faker->numberBetween(1, 50),
			]);
		}
	}

}