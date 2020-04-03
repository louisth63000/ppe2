<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sauce
 *
 * @author utilisateur
 */
class Sauce {
    private static $idSauce;
    private static $nomSauce;
    
    public static function getIdSauce() {
        return self::$idSauce;
    }

    public static function getNomSauce() {
        return self::$nomSauce;
    }

    public static function setIdSauce($idSauce) {
        self::$idSauce = $idSauce;
    }

    public static function setNomSauce($nomSauce) {
        self::$nomSauce = $nomSauce;
    }


}
