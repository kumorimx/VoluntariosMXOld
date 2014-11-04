<?php

class Logro extends \Eloquent {
	protected $fillable = [];
        
        protected $table = 'Logros';
        protected $primaryKey = 'idLogro';
        
        public function administradores() {
            return $this->belongsToMany('Administrador', 'Administradores_has_Logros', 'idLogro', 'idAdministrador');
        }
        
        public function eventos() {
            return $this->belongsToMany('Evento', 'Eventos_has_Logros', 'idLogro', 'idEvento');
        }
}