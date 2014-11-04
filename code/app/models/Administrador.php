<?php

class Administrador extends \Eloquent {
	protected $fillable = ['idAdministrador', 'usuario', 'password', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'telefono', 'extension', 'email'];
        
        protected $table = 'Administradores';
        protected $primaryKey = 'idAdministrador';
        
        public function logros() {
            return $this->belongsToMany('Logro', 'Administradores_has_Logros', 'idAdministrador', 'idLogro');
        }
        
        public function categorias() {
            return $this->hasMany('Categoria', 'idAdministrador', 'idAdministrador');
        }
        
        public function intereses() {
            return $this->hasmany('Interes', 'idAdministrador', 'idAdministrador');
        }
}