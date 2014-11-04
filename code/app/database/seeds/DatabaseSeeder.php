<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

                DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                 $this->call('ParametrosTableSeeder');
                 $this->call('AdministradoresTableSeeder');
                 $this->call('DependenciasTableSeeder');
                 $this->call('ProyectosTableSeeder');
                 $this->call('AliadosTableSeeder');
                 $this->call('EventosTableSeeder');
                 $this->call('CategoriasTableSeeder');
                 $this->call('ActividadesTableSeeder');
                 $this->call('VoluntariosTableSeeder');
                 $this->call('LogrosTableSeeder');
                 $this->call('AliadosContactosTableSeeder');
                 $this->call('DependenciasContactosTableSeeder');
                 $this->call('EventosFAQTableSeeder');
                 $this->call('InteresesTableSeeder');
                 $this->call('FavoritosTableSeeder');
                 $this->call('AdministradoresHasLogrosTableSeeder');
                 $this->call('DependenciasHasLogrosTableSeeder');
                 $this->call('DependenciasHasAliadosTableSeeder');
                 $this->call('EventosHasLogrosTableSeeder');
                 $this->call('EventosHasInteresesTableSeeder');
                 $this->call('EventosHasVoluntariosTableSeeder');
                 $this->call('VoluntariosHasInteresesTableSeeder');
                 $this->call('VoluntariosHasLogrosTableSeeder');
                 DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
