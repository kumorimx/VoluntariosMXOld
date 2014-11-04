<?php

class AdministradorLogro extends \Eloquent {
	protected $fillable = ['idAdministrador', 'idLogro'];
        
        protected $table = 'Administradores_has_Logros';       
}