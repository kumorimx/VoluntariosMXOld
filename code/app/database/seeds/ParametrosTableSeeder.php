<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ParametrosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 1) as $index)
		{
			Parametro::create([
                            'logotipo' => $faker->imageUrl($width = 48, $height = 48),
                            'email' => 'contacto@voluntarios.gob.mx',
                            'telefono1' => '(55)54123456',
                            'telefono2' => $faker->phoneNumber,
                            'telefono3' => $faker->phoneNumber,
                            'extension1' => '3349',
                            'extension2' => $faker->phoneNumber,
                            'extension3' => $faker->phoneNumber,
                            'direccion' => $faker->address,
                            'facebook' => 'http://facebook.com/VoluntariosMX',
                            'twitter' => 'http://twitter.com/VoluntariosMX',
                            'instagram' => 'http://instagram.com/VoluntariosMX',
                            'pinterest' => 'http://pinterest.com/VoluntariosMX',
                            'youtube' => 'http://youtube.com/VoluntariosMX',
                            'gplus' => 'http://plus.google.com/VoluntariosMX',
			]);
		}
	}

}