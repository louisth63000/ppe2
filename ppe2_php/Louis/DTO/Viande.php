<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Viande
 *
 * @author utilisateur
 */
class Viande {
    public static $idViande;
    public static $nomViance;
    
    public static function getIdViande() {
        return self::$idViande;
    }

    public static function getNomViance() {
        return self::$nomViance;
    }

    public static function setIdViande($idViande) {
        self::$idViande = $idViande;
    }

    public static function setNomViance($nomViance) {
        self::$nomViance = $nomViance;
    }


}
