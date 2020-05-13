<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tacos
 *
 * @author utilisateur
 */
class Tacos {
   private static $idTacos;
   private static $taille;
   private static $nomTacos;
   
   public static function getIdTacos() {
       return self::$idTacos;
   }

   public static function getTaille() {
       return self::$taille;
   }

   public static function getNomTacos() {
       return self::$nomTacos;
   }

   public static function setIdTacos($idTacos) {
       self::$idTacos = $idTacos;
   }

   public static function setTaille($taille) {
       self::$taille = $taille;
   }

   public static function setNomTacos($nomTacos) {
       self::$nomTacos = $nomTacos;
   }

}
