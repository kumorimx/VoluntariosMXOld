<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DependenciasTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Dependencia::create([
                            'RFC' => 'XAXX010101000',
                            'razonSocial' => $faker->company,
                            'logotipo' => $faker->imageUrl($width = 48, $height = 48),
                            'objetivo' => $faker->paragraph(8),
                            'telefono' => $faker->phoneNumber,
                            'extension' => $faker->phoneNumber,
                            'email' => $faker->email,
                            'direccion' => $faker->address,
                            'facebook' => 'http://facebook.com/'. $faker->domainWord,
                            'twitter' => 'http://twitter.com/'. $faker->domainWord,
                            'instagram' => 'http://instagram.com/'. $faker->domainWord,
                            'pinterest' => 'http://pinterest.com/'. $faker->domainWord,
                            'youtube' => 'http://youtube.com/'. $faker->domainWord,
                            'gplus' => 'http://plus.google.com/'. $faker->domainWord,
			]);
		}
	}

}