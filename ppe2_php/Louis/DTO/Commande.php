<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commande
 *
 * @author utilisateur
 */
class Commande {
    private static $idCommande;
    private static $idBoisson;
    private static $idTacos;
    private static $idUtilisateur;
    
    public static function getIdUtilisateur() {
        return self::$idUtilisateur;
    }

    public static function setIdUtilisateur($idUtilisateur) {
        self::$idUtilisateur = $idUtilisateur;
    }

        public static function getIdCommande() {
        return self::$idCommande;
    }

    public static function getIdBoisson() {
        return self::$idBoisson;
    }

    public static function getIdTacos() {
        return self::$idTacos;
    }

    public static function setIdCommande($idCommande) {
        self::$idCommande = $idCommande;
    }

    public static function setIdBoisson($idBoisson) {
        self::$idBoisson = $idBoisson;
    }

    public static function setIdTacos($idTacos) {
        self::$idTacos = $idTacos;
    }


}
