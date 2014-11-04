<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DependenciasHasAliadosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			DependenciaAliado::create([
                            'idDependencia' => $faker->numberBetween(1, 50),
                            'idAliado' => $faker->numberBetween(1, 50),
			]);
		}
	}

}