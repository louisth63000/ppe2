<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilisateur
 *
 * @author utilisateur
 */
class Utilisateur {
    //put your code here
    private static $idUtilisateur;
    private static $nom;
    private static $prenom;
    private static $mdp;
    private static $dateInscription;
    private static $idPanier;
    private static $idCommande;
    
    public static function getIdUtilisateur() {
        return self::$idUtilisateur;
    }

    public static function getNom() {
        return self::$nom;
    }

    public static function getPrenom() {
        return self::$prenom;
    }

    public static function getMdp() {
        return self::$mdp;
    }

    public static function getDateInscription() {
        return self::$dateInscription;
    }

    public static function getIdPanier() {
        return self::$idPanier;
    }

    public static function getIdCommande() {
        return self::$idCommande;
    }

    public static function setIdUtilisateur($idUtilisateur) {
        self::$idUtilisateur = $idUtilisateur;
    }

    public static function setNom($nom) {
        self::$nom = $nom;
    }

    public static function setPrenom($prenom) {
        self::$prenom = $prenom;
    }

    public static function setMdp($mdp) {
        self::$mdp = $mdp;
    }

    public static function setDateInscription($dateInscription) {
        self::$dateInscription = $dateInscription;
    }

    public static function setIdPanier($idPanier) {
        self::$idPanier = $idPanier;
    }

    public static function setIdCommande($idCommande) {
        self::$idCommande = $idCommande;
    }


}
