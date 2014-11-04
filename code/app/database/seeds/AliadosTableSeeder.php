<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AliadosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Aliado::create([
                            'RFC' => 'XAXX010101000',
                            'razonSocial' => $faker->company,
                            'logotipo' => $faker->imageUrl($width = 120, $height = 120),
                            'objetivo' => $faker->paragraph(8),
                            'facebook' => 'http://facebook.com/'. $faker->domainWord,
                            'twitter' => 'http://twitter.com/'. $faker->domainWord,
                            'instagram' => 'http://instagram.com/'. $faker->domainWord,
                            'pinterest' => 'http://pinterest.com/'. $faker->domainWord,
                            'youtube' => 'http://youtube.com/'. $faker->domainWord,
                            'gplus' => 'http://plus.google.com/'. $faker->domainWord,
                            'status' => $faker->numberBetween(0, 2),
			]);
		}
	}

}