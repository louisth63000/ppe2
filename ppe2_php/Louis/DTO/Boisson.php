<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Boisson
 *
 * @author utilisateur
 */
class Boisson {
    private static $idBoisson;
    private static $nomBoisson;
    private static $idCommande;
    
    public static function getIdCommande() {
        return self::$idCommande;
    }

    public static function setIdCommande($idCommande) {
        self::$idCommande = $idCommande;
    }

    
    public static function getIdBoisson() {
        return self::$idBoisson;
    }

    public static function getNomBoisson() {
        return self::$nomBoisson;
    }

    public static function setIdBoisson($idBoisson) {
        self::$idBoisson = $idBoisson;
    }

    public static function setNomBoisson($nomBoisson) {
        self::$nomBoisson = $nomBoisson;
    }


}
