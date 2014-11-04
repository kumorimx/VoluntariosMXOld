<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AdministradoresTableSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();
        
        $puestos = ['Administrador', 'Ventas', 'Recursos Humanos', 'Gerente'];
        
        Administrador::create([
                'usuario' => 'alberto',
                'password' => \Hash::make('vidales'),
                'nombre' => 'Alberto',
                'apellidoPaterno' => 'Vidales',
                'apellidoMaterno' => 'Fernandez',
                'telefono' => '6691768490',
                'extension' => '',
                'email' => 'alberto.vidales@kumori.mx',
            ]);
        
        foreach (range(1, 10) as $index) {
            Administrador::create([
                'usuario' => $faker->userName,
                'password' => \Hash::make('123456'),
                'nombre' => $faker->firstName,
                'apellidoPaterno' => $faker->lastName,
                'apellidoMaterno' => $faker->lastName,
                'telefono' => $faker->phoneNumber,
                'extension' => '3349',
                'email' => $faker->email,
            ]);
        }
    }

}
