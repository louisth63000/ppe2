<?php
include_once ('tools/DatabaseLinkers.php');
include_once ('DTO/Commande.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommandeManager
 *
 * @author utilisateur
 */
class CommandeManager {
    public static function  findCommande($idCommande)
    {
        $Commande=new Commande();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("SELECT * FROM Commande WHERE idCommande=?");
        $state->bindParam(1,$idCommande);
        $state->execute();
        $resultas=$state->fetchAll();
        $resultasMessage=$resultas[0];
        $Commande->setIdCommande($idCommande);
        $Commande->setIdBoisson($resultasMessage["idBoisson"]);
        $Commande->setIdTacos($resultasMessage["idTacos"]);
        $Commande->setIdUtilisateur($resultasMessage["idUtilisateur"]);
        return $Commande;   
    }
    public static function findAllCommandetoUtilisateur($idUtilisateur)
    {
        $listCommande=array();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("SELECT * FROM Commande WHERE idUtilisateur=?");
        $state->bindParam(1,$idUtilisateur);
        $state->execute();
        $resultas=$state->fetchAll();
        foreach($resultas as $lineresultas)
        {
             $Commande= BoissonManager::findBoisson($lineresultas["idCommande"]);
             $listCommande[]=$Commande;
        }
        return $listCommande;
    }
     public static function insertCommande($idCommande,$idBoisson,$idTacos,$idUtilisateur)
    {
         $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("INSERT INTO Sujet(idCommande,idBoisson,idTacos,idUtilisateur)
VALUES(?,?,?,?)");
         $state->bindParam(1,$idCommande);
         $state->bindParam(2,$idBoisson);
         $state->bindParam(3,$idTacos);
         $state->bindParam(4,$idUtilisateur);
         $state->execute();
            
        
    }
    public static function deleteCommande($idCommande)
    {
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("DELETE FROM Commande WHERE idCommande=?");
        $state->bindParam(1,$idCommande);
        $state->execute();
    }
    public static function UpdateCommande($Commande)
    {
        $idCommande=$Commande->getIdCommande();
        $idBoisson=$Commande->getIdBoisson();
        $idTacos=$Commande->getIdTacos();
        $idUtilisateur=$Commande->getIdUtilisateur();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("UPDATE Sujet SET idBoisson=?,idTacos=?,idUtilisateur=? WHERE idCommande=?");
        $state->bindParam(1,$idBoisson);
        $state->bindParam(2,$idTacos);
        $state->bindParam(3,$idUtilisateur);
        $state->bindParam(4,$idCommande);
        $state->execute();
    }
}
