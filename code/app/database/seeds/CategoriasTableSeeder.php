<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriasTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
                
                $categorias = ['Educación', 'Integración de los grupos marginalizados', 'Promoción y estrategias de desarrollo', 'Gobernabilidad y derechos humanos', 'Generación de ingresos y empleo', 'Genero', 'Salud', 'Alimentación y agricultura', 'Medio ambiente', 'Juventud', 'Prevención y recuperación de las crisis', 'Cultura'];
		foreach(range(1, 10) as $index)
		{
			Categoria::create([
                            'idAdministrador' => $faker->numberBetween(1, 11),
                            'nombre' => $faker->randomElement($categorias),
                            'imagen' => $faker->imageUrl($width = 48, $height = 48),
			]);
		}
	}

}