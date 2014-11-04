<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InteresesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
	
		$intereses[1] = "Agricultura";
		$intereses[2] = "Asistencia Electoral";
		$intereses[3] = "Ecología";
		$intereses[4] = "Educación";
		$intereses[5] = "Derechos Humanos";
		$intereses[6] = "Género";
		$intereses[7] = "Gobernanza";
		$intereses[8] = "Idiomas";
		$intereses[9] = "Juventud";
		$intereses[10] = "Medio Ambiente";
		$intereses[11] = "Niños";
		$intereses[12] = "Paz y Solución de Conflictos";
		$intereses[13] = "Personas Discapacitadas";
		$intereses[14] = "Pobreza";
		$intereses[15] = "Refugiados";
		$intereses[16] = "Salud";
		$intereses[17] = "Sector Privado";
		$intereses[18] = "Seguridad y Fuente de Alimento";
		$intereses[19] = "Sociedad Civil";
		$intereses[20] = "Socorro de Emergencia";
		
		foreach(range(1, 20) as $index)
		{
			Interes::create([
                            'idAdministrador' => $faker->numberBetween(1, 11),
                            'descripcion' => $intereses[$index],
			]);
		}
	}

}