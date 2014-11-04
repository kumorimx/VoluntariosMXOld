<?php

class Categoria extends \Eloquent {
	protected $fillable = ['idAdministrador', 'nombre', 'imagen'];
        
        protected $table = 'Categorias';
        protected $primaryKey = 'idCategoria';
        
        public function administrador() {
            return $this->belongsTo('Administrador', 'idAdministrador', 'idAdministrador');
        }
        
        public function actividades() {
            return $this->hasMany('Actividad', 'idCategoria', 'idCategoria');
        }
}