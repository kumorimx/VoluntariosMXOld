<?php

class Voluntario extends \Eloquent {
	protected $fillable = [];
        
        protected $table = 'Voluntarios';
        protected $primaryKey = 'idVoluntario';
        
        public function eventos() {
            return $this->belongsToMany('Evento', 'Eventos_has_Voluntarios', 'idVoluntario', 'idEvento');
        }
        
        public function eventosfav() {
            return $this->belongsToMany('Evento', 'Favoritos', 'idVoluntario', 'idEvento');
        }
        
        public function logros() {
            return $this->belongsToMany('Logro', 'Voluntarios_has_Logros', 'idVoluntario', 'idLogro')->withPivot('puntaje');
        }

        public function intereses() {
            return $this->belongsToMany('Interes', 'Voluntarios_has_Intereses', 'idVoluntario', 'idInteres');
        }
}