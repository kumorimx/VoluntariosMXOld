<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProyectosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Proyecto::create([
                            'idDependencia' => $faker->numberBetween(1, 50),
                            'nombre' => $faker->catchPhrase,
                            'objetivoGeneral' => $faker->text,
                            'objetivosEspecificos' => $faker->text,
                            'semblanza' => $faker->text,
                            'justificacionPDNActual' => $faker->text,
                            'fechaInicio' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = '+3 years'),
                            'fechaFin' => $faker->dateTimeBetween($startDate = '+1 years', $endDate = '+4 years'),
			]);
		}
	}

}