<?php

class DependenciaContacto extends \Eloquent {
	protected $fillable = [];
        
        protected $table = 'Dependencias_Contactos';
        protected $primaryKey = 'idContacto';
        
        public function dependencia() {
            return $this->belongsTo('Dependencia', 'idDependencia', 'idDependencia');
        }
}