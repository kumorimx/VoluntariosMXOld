<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SesionKumori
 *
 * @author Alberto Vidales
 */
class SesionKumori {
    
    public static function setTipoUsuario($tipoUsuario) {
        Session::put('tipoUsuario', $tipoUsuario);
    }
    
    public static function getTipousuario() {
        return Session::get('tipoUsuario');
    }
}
