<?php

class DependenciaLogro extends \Eloquent {
	protected $fillable = [];
        
        protected $table = 'Dependencias_has_Logros';
        
        public function dependencia() {
            return $this->belongsTo('Dependencia', 'idDependencia', 'idDependencia');
        }
}