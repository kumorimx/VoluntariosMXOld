<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LogrosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		
		$logros[1] = "Voluntario Bronce";
		$logros[2] = "Voluntario Plata";
		$logros[3] = "Voluntario Oro";
		$logros[4] = "Voluntario Platino";
		$logros[5] = "Voluntario Diamante";
		$logros[6] = "Agricultura Bronce";
		$logros[7] = "Agricultura Plata";
		$logros[8] = "Agricultura Oro";
		$logros[9] = "Agricultura Platino";
		$logros[10] = "Agricultura Diamante";
		$logros[11] = "Educación Bronce";
		$logros[12] = "Educación Plata";
		$logros[13] = "Educación Oro";
		$logros[14] = "Educación Platino";
		$logros[15] = "Educación Diamante";
		$logros[16] = "Voluntario en Linea Bronce";
		$logros[17] = "Voluntario en Linea Plata";
		$logros[18] = "Voluntario en Linea Oro";
		$logros[19] = "Voluntario en Linea Platino";
		$logros[20] = "Voluntario en Linea Diamante";
		$logros[21] = "Derechos Humanos Bronce";
		$logros[22] = "Derechos Humanos Plata";
		$logros[23] = "Derechos Humanos Oro";
		$logros[24] = "Derechos Humanos Platino";
		$logros[25] = "Derechos Humanos Diamante";
		$logros[26] = "Medio Ambiente Bronce";
		$logros[27] = "Medio Ambiente Plata";
		$logros[28] = "Medio Ambiente Oro";
		$logros[29] = "Medio Ambiente Platino";
		$logros[30] = "Medio Ambiente Diamante";
		$logros[31] = "Salud Bronce";
		$logros[32] = "Salud Plata";
		$logros[33] = "Salud Oro";
		$logros[34] = "Salud Platino";
		$logros[35] = "Salud Diamante";
		$logros[36] = "Cultura y Deporte Bronce";
		$logros[37] = "Cultura y Deporte Plata";
		$logros[38] = "Cultura y Deporte Oro";
		$logros[39] = "Cultura y Deporte Platino";
		$logros[40] = "Cultura y Deporte Diamante";
		$logros[41] = "Género Bronce";
		$logros[42] = "Género Plata";
		$logros[43] = "Género Oro";
		$logros[44] = "Género Platino";
		$logros[45] = "Género Diamante";
		$logros[46] = "Amigo de los Animales Bronce";
		$logros[47] = "Amigo de los Animales Plata";
		$logros[48] = "Amigo de los Animales Oro";
		$logros[49] = "Amigo de los Animales Platino";
		$logros[50] = "Amigo de los Animales Diamante";
		
		foreach(range(1, 50) as $index)
		{
			Logro::create([
                            'imagen' => $faker->imageUrl($width = 48, $height = 48),
                            'nombre' => $logros[$index],
                            'recordRequerido' => $faker->randomElement([5, 10, 15, 20, 25, 30, 35, 40, 45, 50]),
                            'descripcion' => $faker->sentence(7),
                            'maxPuntos' => $faker->randomElement([70,80, 90, 100, 120, 150, 200]),
                            'minPuntos' => $faker->randomElement([10, 20, 30, 40, 50, 60]),
                            'tipoLogro' => $faker->randomElement([1, 2, 3, 4]),
			]);
		}
	}

}