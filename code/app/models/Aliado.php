<?php

class Aliado extends \Eloquent {
	protected $fillable = ['RFC', 'razonSocial', 'logotipo', 'objetivo', 'facebook', 'twitter', 'instagram', 'pinterest', 'youtube', 'gplus'];
        
        protected $table = 'Aliados';
        protected $primaryKey = 'idAliado';
        
        public function contactos() {
            return $this->hasMany('AliadoContacto', 'idAliado', 'idAliado');
        }
        
        public function eventos() {
            return $this->hasMany('Evento', 'idAliado', 'idAliado');
        }
        
        public function dependencias() {
            return $this->belongsToMany('Dependencia', 'Dependencias_has_Aliados', 'idAliado', 'idAliado');
        }
}