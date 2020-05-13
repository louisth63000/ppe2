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
    private static $idTacos;
    private static $nom;
    private static $prenom;
    private static $adresse;
   
    static function getNom() {
        return self::$nom;
    }

    static function getPrenom() {
        return self::$prenom;
    }

    static function getAdresse() {
        return self::$adresse;
    }

    static function setNom($nom) {
        self::$nom = $nom;
    }

    static function setPrenom($prenom) {
        self::$prenom = $prenom;
    }

    static function setAdresse($adresse) {
        self::$adresse = $adresse;
    }

        public static function getIdCommande() {
        return self::$idCommande;
    }

   public static function getIdTacos() {
        return self::$idTacos;
    }

    public static function setIdCommande($idCommande) {
        self::$idCommande = $idCommande;
    }
    public static function setIdTacos($idTacos) {
        self::$idTacos = $idTacos;
    }


}
