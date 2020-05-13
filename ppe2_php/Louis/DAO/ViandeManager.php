<?php
include_once ('tools/DatabaseLinkers.php');
include_once ('DTO/Viande.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViandeManager
 *
 * @author utilisateur
 */
class ViandeManager {
    public static function  findViande($idViande)
    {
        $Viande=new Viande();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("SELECT * FROM Viande WHERE idViande=?");
        $state->bindParam(1,$idViande);
        $state->execute();
        $resultas=$state->fetchAll();
        $resultasMessage=$resultas[0];
        $Viande->setIdViande($idViande);
        $Viande->setNomViance($resultasMessage["nomViande"]);
        $Viande->setIdTacos($resultasMessage["idTacos"]);
        return $Viande;   
    }
    public static function findAllViande()
    {
        $listViande=array();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("SELECT * FROM Viande");
        $state->execute();
        $resultas=$state->fetchAll();
        foreach($resultas as $lineresultas)
        {
             $Viande= BoissonManager::findBoisson($lineresultas["idViande"]);
             $listViande[]=$Viande;
        }
        return $listViande;
    }
     public static function insertViande($nomViande,$idTacos)
    {
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("INSERT INTO Viande(nomViande,idTacos)
VALUES(?,?)");
         $state->bindParam(1,$nomViande);
         $state->bindParam(2,$idTacos);
         $state->execute();
    }   
}
