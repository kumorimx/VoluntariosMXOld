<?php

class EventoFAQ extends \Eloquent {
	protected $fillable = [];
        
        protected $table = 'Eventos_FAQ';
        protected $primaryKey = 'idEvento_FAQ';
        
        public function evento() {
            return $this->belongsTo('Evento', 'idEvento', 'idEvento');
        }
}