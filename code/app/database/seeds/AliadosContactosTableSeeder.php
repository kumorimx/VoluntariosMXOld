<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AliadosContactosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
                
                $puestos = ['Administrador', 'Jefe de Departamento', 'Gerente'];
                
		foreach(range(1, 50) as $index)
		{
			AliadoContacto::create([
                            'idAliado' => $faker->numberBetween(1, 50),
                            'nombre' => $faker->firstName,
                            'apellidoPaterno' => $faker->lastName,
                            'apellidoMaterno' => $faker->lastName,
                            'puesto' => $faker->randomElement($puestos),
                            'telefono' => $faker->phoneNumber,
                            'extension' => $faker->phoneNumber,
                            'email' => $faker->email,
			]);
		}
	}

}