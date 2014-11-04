<?php

class Actividad extends \Eloquent {
	protected $fillable = ['idEvento', 'idCategoria', 'nombre', 'descripcion', 'requisitos', 'fechaInicio', 'fechaFin'];
        
        protected $table = 'Actividades';
        protected $primaryKey = 'idActividad';
        
        public function evento() {
            return $this->hasOne('Evento', 'idEvento', 'idEvento');
        }
        
        public function categoria() {
            return $this->belongsTo('Categoria', 'idCategoria', 'idCategoria');
        }
}