<?php

class Interes extends \Eloquent {
	protected $fillable = [];
        
        protected $table = 'Intereses';
        protected $primaryKey = 'idInteres';
        
        public function eventos() {
            return $this->belongsToMany('Evento', 'Eventos_has_Intereses', 'idInteres', 'idEvento');
        }
}