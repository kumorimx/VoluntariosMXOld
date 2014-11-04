<?php

class Dependencia extends \Eloquent {
	protected $fillable = ['RFC', 'razonSocial', 'logotipo', 'objetivo', 'facebook', 'twitter', 'instagram', 'pinterest', 'youtube', 'gplus'];
        
        protected $table = 'Dependencias';
        protected $primaryKey = 'idDependencia';
        
        public function proyectos() {
            return $this->hasMany('Proyecto', 'idDependencia', 'idDependencia');
        }
        
        public function contactos() {
            return $this->hasMany('DependenciaContacto', 'idDependencia', 'idDependencia');
        }
        
        public function logros() {
            return $this->belongsToMany('Logro', 'Dependencias_has_Logros', 'idDependencia', 'idDependencia');
        }
        
        public function aliados() {
            return $this->belongsToMany('Dependencia', 'Dependencias_has_Aliados', 'idDependencia', 'idDependencia');
        }
        
}