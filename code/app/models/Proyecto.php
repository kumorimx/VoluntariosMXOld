<?php

class Proyecto extends \Eloquent {
	protected $fillable = [];
        
        protected $table = 'Proyectos';
        protected $primaryKey = 'idProyecto';
        
        public function eventos() {
            return $this->hasMany('Evento', 'idProyecto', 'idProyecto');
        }
        
        public function dependencia() {
            return $this->belongsTo('Dependencia', 'idDependencia', 'idDependencia');
        }
}