<?php

class Evento extends \Eloquent {
	protected $fillable = ['ciudad'];
        
        protected $table = 'Eventos';
        protected $primaryKey = 'idEvento';
        
        public function proyecto() {
            return $this->belongsTo('Proyecto', 'idProyecto', 'idProyecto');
        }
        
        public function aliado() {
            return $this->belongsTo('Aliado', 'idAliado', 'idAliado');
        }
        
        public function actividades() {
            return $this->hasMany('Actividad', 'idEvento', 'idEvento');
        }
        
        public function voluntarios() {
            return $this->belongsToMany('Voluntario', 'Eventos_has_Voluntarios', 'idEvento', 'idVoluntario');
        }
        
        public function voluntariosfavs() {
            return $this->belongsToMany('Voluntario', 'Favoritos', 'idEvento', 'idVoluntario');
        }
        
        public function intereses() {
            return $this->belongsToMany('Interes', 'Eventos_has_Intereses', 'idEvento', 'idInteres');
        }
        
        public function logros() {
            return $this->belongsToMany('Logro', 'Eventos_has_Logros', 'idEvento', 'idLogro')->withPivot('puntaje', 'aumentarRecord');
        }
        
        public function eventosFaq() {
            return $this->hasMany('EventoFAQ', 'idEvento', 'idEvento');
        }
}