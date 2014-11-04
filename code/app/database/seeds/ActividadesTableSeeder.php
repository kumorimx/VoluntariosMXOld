<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ActividadesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		
		$actividades[1] = "Recolectar basura";
		$actividades[2] = "Curso de preparación";
		$actividades[3] = "Plantar árboles";
		$actividades[4] = "Curso en linea";
		$actividades[5] = "Conferencia presencial";
		$actividades[6] = "Conferencia en linea";
		$actividades[7] = "Impartir clases a niños";
		$actividades[8] = "Impartir clases a adultos";
		$actividades[9] = "Preparar material para evento";
		$actividades[10] = "Actividades de lógistica";
		$actividades[11] = "Distribuir material";
		$actividades[12] = "Acopiar articulos";
		$actividades[13] = "Acopiar alimentos";
		$actividades[14] = "Foro de discusión";
		$actividades[15] = "Atender personas de la tercera edad";
		$actividades[16] = "Atender personas discapacitadas";
		$actividades[17] = "Atender niños";
		$actividades[18] = "Atender personas damnificadas";
		$actividades[19] = "Arbitraje en eventos deportivos para niños";
		$actividades[20] = "Arbitraje en eventos deportivos para discapacitados";
		$actividades[21] = "Impartir clases deportivas para niños";
		$actividades[22] = "Impartir clases deportivas para discapacitados";
		$actividades[23] = "Impartir plática informativa";
		$actividades[24] = "Visitar zonas afectadas";
		$actividades[25] = "Visitar zonas damnificadas";
		$actividades[26] = "Transportar víveres";
		$actividades[27] = "Transportar personas";
		$actividades[27] = "Preparar comida para damnificados";
		$actividades[28] = "Preparar comida para refugiados";
		$actividades[29] = "Preparar comida para niños";
		$actividades[30] = "Servir comida para damnificados";
		$actividades[31] = "Servir comida para refugiados";
		$actividades[32] = "Servir comida para niños";
		$actividades[33] = "Investigar sobre diferentes temas";
		$actividades[34] = "Documentar los hechos";
		$actividades[35] = "Supervisar actividades";
		$actividades[36] = "Registrar entradas y salidas de inventario";
		$actividades[37] = "Redactar documentos";
		$actividades[38] = "Traducir documentos";
		$actividades[39] = "Cuidado de animales";
		$actividades[40] = "Esterilización de animales";
		$actividades[41] = "Labores de construcción";
		$actividades[42] = "Impartir actividades recreativas";
		$actividades[43] = "Convivir con niños";
		$actividades[44] = "Convivir con personas discapacitadas";
		$actividades[45] = "Convivir con personas de la tercera edad";
		$actividades[46] = "Capacitación de personas";
		$actividades[47] = "Recolectar materiales de reciclaje";
		$actividades[48] = "Limpieza en zonas afectadas por desastre";
		$actividades[49] = "Evacuación de damnificados";
		$actividades[50] = "Evacuación de afectados";
		
		foreach(range(1, 50) as $index)
		{
			Actividad::create([
                            'idEvento' => $faker->numberBetween(1, 20),
                            'idCategoria' => $faker->numberBetween(1, 10),
                            'nombre' => $actividades[$index],
                            'descripcion' => $faker->paragraph(6),
                            'requisitos' => $faker->paragraph(6),
                            'fechaInicio' => $faker->dateTimeBetween('+30 days', '+60 days'),
                            'fechaFin' => $faker->dateTimeBetween('+61 days', '+120 days'),
                            
			]);
		}
	}

}