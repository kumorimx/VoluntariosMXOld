<?php

class AliadoContacto extends \Eloquent {
	protected $fillable = ['idAliado', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'puesto', 'telefono', 'extension', 'email'];
        
        protected $table = 'Aliados_Contactos';
        protected $primaryKey = 'idContacto';
        
        public function aliado() {
            return $this->belongsTo('Aliado', 'Aliados', 'idContacto', 'idAliado');
        }
}