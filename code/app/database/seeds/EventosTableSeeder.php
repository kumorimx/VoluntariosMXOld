<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

              $dire["Sinaloa"]["Mazatlan"][1]["Colonia"]              =      "Sábalo Country Club";
              $dire["Sinaloa"]["Mazatlan"][1]["codigoPostal"]         =      "82100";

              $dire["Sinaloa"]["Mazatlan"][2]["Colonia"]              =      "Lomas de Mazatlán";
              $dire["Sinaloa"]["Mazatlan"][2]["codigoPostal"]         =      "82110";

              $dire["Sinaloa"]["Mazatlan"][3]["Colonia"]              =      "Lomas Del Ébano";
              $dire["Sinaloa"]["Mazatlan"][3]["codigoPostal"]         =      "82198";

              $dire["Sinaloa"]["Mochis"][1]["Colonia"]                =      "Bellavista";
              $dire["Sinaloa"]["Mochis"][1]["codigoPostal"]           =      "81256";

              $dire["Sinaloa"]["Mochis"][2]["Colonia"]                =      "Cuauhtémoc";
              $dire["Sinaloa"]["Mochis"][2]["codigoPostal"]           =      "81360";

              $dire["Sinaloa"]["Mochis"][3]["Colonia"]                =      "Huatabampito";
              $dire["Sinaloa"]["Mochis"][3]["codigoPostal"]           =      "81300";

              $dire["Sinaloa"]["Guasave"][1]["Colonia"]               =      "San Antonio";
              $dire["Sinaloa"]["Guasave"][1]["codigoPostal"]          =      "81162";

              $dire["Sinaloa"]["Guasave"][2]["Colonia"]               =      "Tecomate";
              $dire["Sinaloa"]["Guasave"][2]["codigoPostal"]          =      "81065";

              $dire["Sinaloa"]["Ciudad"][1]          =      "Mazatlan";
              $dire["Sinaloa"]["Ciudad"][2]          =      "Mochis";
              $dire["Sinaloa"]["Ciudad"][3]          =      "Guasave";

              $dire["Sinaloa"]["Guasave"][3]["Colonia"]               =      "Tajito";
              $dire["Sinaloa"]["Guasave"][3]["codigoPostal"]          =      "81127";
              // SONORA
              $dire["Sonora"]["Hermosillo"][1]["Colonia"]            =      "Altares";
              $dire["Sonora"]["Hermosillo"][1]["codigoPostal"]       =      "83296";

              $dire["Sonora"]["Hermosillo"][2]["Colonia"]            =      "Dunas";
              $dire["Sonora"]["Hermosillo"][2]["codigoPostal"]       =      "83179";

              $dire["Sonora"]["Hermosillo"][3]["Colonia"]            =      "Morelos";
              $dire["Sonora"]["Hermosillo"][3]["codigoPostal"]       =      "83285";

              $dire["Sonora"]["Navojoa"][1]["Colonia"]               =      "Siviral";
              $dire["Sonora"]["Navojoa"][1]["codigoPostal"]          =      "85229";

              $dire["Sonora"]["Navojoa"][2]["Colonia"]               =      "Masiaca";
              $dire["Sonora"]["Navojoa"][2]["codigoPostal"]          =      "85220";

              $dire["Sonora"]["Navojoa"][3]["Colonia"]               =      "Capohuiza";
              $dire["Sonora"]["Navojoa"][3]["codigoPostal"]          =      "85239";

              $dire["Sonora"]["Nogales"][1]["Colonia"]               =      "Granjas";
              $dire["Sonora"]["Nogales"][1]["codigoPostal"]          =      "84065";

              $dire["Sonora"]["Nogales"][2]["Colonia"]               =      "Palermo";
              $dire["Sonora"]["Nogales"][2]["codigoPostal"]          =      "84094";

              $dire["Sonora"]["Nogales"][3]["Colonia"]               =      "Solidaridad";
              $dire["Sonora"]["Nogales"][3]["codigoPostal"]          =      "84090";

              $dire["Sonora"]["Ciudad"][1]          =      "Hermosillo";
              $dire["Sonora"]["Ciudad"][2]          =      "Navojoa";
              $dire["Sonora"]["Ciudad"][3]          =      "Nogales";

              // JALISCO
              $dire["Jalisco"]["Guadalajara"][1]["Colonia"]            =      "Barranquitas";
              $dire["Jalisco"]["Guadalajara"][1]["codigoPostal"]       =      "44270";

              $dire["Jalisco"]["Guadalajara"][2]["Colonia"]            =      "Florencia";
              $dire["Jalisco"]["Guadalajara"][2]["codigoPostal"]       =      "44824";

              $dire["Jalisco"]["Guadalajara"][3]["Colonia"]            =      "Miraflores";
              $dire["Jalisco"]["Guadalajara"][3]["codigoPostal"]       =      "44270";

              $dire["Jalisco"]["Zapopan"][1]["Colonia"]                =      "Azaleas";
              $dire["Jalisco"]["Zapopan"][1]["codigoPostal"]           =      "45239";

              $dire["Jalisco"]["Zapopan"][2]["Colonia"]                =      "Bugambilias";
              $dire["Jalisco"]["Zapopan"][2]["codigoPostal"]           =      "45238";

              $dire["Jalisco"]["Zapopan"][3]["Colonia"]                =      "Patria";
              $dire["Jalisco"]["Zapopan"][3]["codigoPostal"]           =      "45160";

              $dire["Jalisco"]["Puerto Vallarta"][1]["Colonia"]        =      "Ixtapa";
              $dire["Jalisco"]["Puerto Vallarta"][1]["codigoPostal"]   =      "48280";

              $dire["Jalisco"]["Puerto Vallarta"][2]["Colonia"]        =      "Olímpica";
              $dire["Jalisco"]["Puerto Vallarta"][2]["codigoPostal"]   =      "48330";

              $dire["Jalisco"]["Puerto Vallarta"][3]["Colonia"]        =      "Volcanes";
              $dire["Jalisco"]["Puerto Vallarta"][3]["codigoPostal"]   =      "48290";

              $dire["Jalisco"]["Ciudad"][1]          =      "Guadalajara";
              $dire["Jalisco"]["Ciudad"][2]          =      "Zapopan";
              $dire["Jalisco"]["Ciudad"][3]          =      "Puerto Vallarta";

              // DISTRITO FEDERAL
              $dire["Distrito Federal"]["Tlalpan"][1]["Colonia"]            =      "Periférico";
              $dire["Distrito Federal"]["Tlalpan"][1]["codigoPostal"]       =      "14335";

              $dire["Distrito Federal"]["Tlalpan"][2]["Colonia"]            =      "Tepetitla";
              $dire["Distrito Federal"]["Tlalpan"][2]["codigoPostal"]       =      "14470";

              $dire["Distrito Federal"]["Tlalpan"][3]["Colonia"]            =      "Pueblo Quieto";
              $dire["Distrito Federal"]["Tlalpan"][3]["codigoPostal"]       =      "14040";

              $dire["Distrito Federal"]["Coyoacan"][1]["Colonia"]           =      "Espartaco";
              $dire["Distrito Federal"]["Coyoacan"][1]["codigoPostal"]      =      "04870";

              $dire["Distrito Federal"]["Coyoacan"][2]["Colonia"]           =      "Xotepingo";
              $dire["Distrito Federal"]["Coyoacan"][2]["codigoPostal"]      =      "04610";

              $dire["Distrito Federal"]["Coyoacan"][3]["Colonia"]           =      "Los Sauces";
              $dire["Distrito Federal"]["Coyoacan"][3]["codigoPostal"]      =      "04940";

              $dire["Distrito Federal"]["Xochimilco"][1]["Colonia"]        =      "Caltongo";
              $dire["Distrito Federal"]["Xochimilco"][1]["codigoPostal"]   =      "16090";

              $dire["Distrito Federal"]["Xochimilco"][2]["Colonia"]        =      "Tecalipa";
              $dire["Distrito Federal"]["Xochimilco"][2]["codigoPostal"]   =      "16866";

              $dire["Distrito Federal"]["Xochimilco"][3]["Colonia"]        =      "Tototitla";
              $dire["Distrito Federal"]["Xochimilco"][3]["codigoPostal"]   =      "16550";

              $dire["Distrito Federal"]["Ciudad"][1]          =      "Tlalpan";
              $dire["Distrito Federal"]["Ciudad"][2]          =      "Coyoacan";
              $dire["Distrito Federal"]["Ciudad"][3]			  =      "Xochimilco";

			  $nombreEventos[1] = "Dia del voluntario";
			  $nombreEventos[2] = "Un dia para ayudar";
			  $nombreEventos[3] = "Planta un arbol";
			  $nombreEventos[4] = "Reforesta tu ciudad";
			  $nombreEventos[5] = "Manten tu playa limpia";
			  $nombreEventos[6] = "Unidos por el desarrollo sustentable";
			  $nombreEventos[7] = "Apendizaje mutuo";
			  $nombreEventos[8] = "Unidos por la igualdad de género";
			  $nombreEventos[9] = "Lucha por los derechos humanos";
			  $nombreEventos[10] = "Agricultora ecológica por un desarrollo sostenible";
			  $nombreEventos[11] = "Trabajemos por la sostenibilidad medioambiental";
			  $nombreEventos[12] = "Voluntarios en linea";
			  $nombreEventos[13] = "Resolvamos juntos los problemas de los jóvenes";
			  $nombreEventos[14] = "Prevención de enfermedades de transmisión sexual";
			  $nombreEventos[15] = "Cine foro contra el racismo y la discriminación";
			  $nombreEventos[16] = "Todos unidos";
			  $nombreEventos[17] = "Voluntariado a olimpiadas especiales";
			  $nombreEventos[18] = "Abriendo camino a los derechos humanos";
			  $nombreEventos[19] = "Gestión integral de residuos sólidos";
			  $nombreEventos[20] = "Voluntariado por el medio ambiente";
			  $nombreEventos[21] = "Empresas socialmente responsables";
			  $nombreEventos[22] = "Manos entrelazadas para un mañana más fuerte";
			  $nombreEventos[23] = "Tejiendo la autonomía de las mujeres";
			  $nombreEventos[24] = "Contribuir a un mundo mas inclusivo";
			  $nombreEventos[25] = "Empoderando a los ciudadanos a través de los medios sociales";
			  $nombreEventos[26] = "Jóvenes cambiando el mundo";
			  $nombreEventos[27] = "Ayudando a los demás";
			  $nombreEventos[28] = "Distribución de alimentos";
			  $nombreEventos[29] = "Respuesta ante desastres naturales";
			  $nombreEventos[30] = "Trabajar por la paz y democracia";
			  $nombreEventos[31] = "Listos para actuar";
			  $nombreEventos[32] = "Carrera por la paz";
			  $nombreEventos[33] = "Voluntariado humanitario";
			  $nombreEventos[34] = "Voluntarios por la paz y convivencia";
			  $nombreEventos[35] = "Desarrollo a través de la economía creativa";

		foreach(range(1, 20) as $index)
		{
                     $miEstado = $faker->randomElement(["Sinaloa", "Sonora", "Jalisco", "Distrito Federal"]);
                     $miCiudad = $faker->randomElement([$dire[$miEstado]["Ciudad"][1], $dire[$miEstado]["Ciudad"][2],$dire[$miEstado]["Ciudad"][3]]);

                     $miRandom = $faker->numberBetween(1, 3);

                     $miColonia = $dire[$miEstado][$miCiudad][$miRandom]["Colonia"];
                     $miCodigoPostal = $dire[$miEstado][$miCiudad][$miRandom]["codigoPostal"];
                     
			Evento::create([
                            'idProyecto' => $faker->numberBetween(1, 10),
                            'idAliado' => $faker->numberBetween(1, 50),
                            'nombrePublico' => $faker->catchPhrase,
                            'nombre' => $nombreEventos[$faker->numberBetween(1,35)],
                            'descripcion' => $faker->paragraph(6),
                            'cupo' => $faker->numberBetween(10, 200),
                            'mapa' => $faker->latitude . ',' . $faker->longitude,
                            'fechaInicio' => $faker->dateTimeBetween($startDate = '-1 weeks', $endDate = '+1 weeks'),
                            'fechaFin' => $faker->dateTimeBetween($startDate = '+1 weeks', $endDate = '+2 weeks'),
                            'diasConfirmacion' => $faker->randomElement([5, 7, 10, 15]),
                            'colonia' => $miColonia,
                            'ciudad' => $miCiudad,
                            'estado' => $miEstado,
                            'codigoPostal' => $miCodigoPostal,
                            'status' => 1,
                            
			]);
		}
	}

}