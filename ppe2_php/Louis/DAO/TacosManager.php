<?php
include_once ('tools/DatabaseLinkers.php');
include_once ('DTO/Tacos.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TacosManager
 *
 * @author utilisateur
 */
class TacosManager {
     public static function  findTacos($idTacos)
    {
        $Tacos=new Tacos();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("SELECT * FROM Tacos WHERE idTacos=?");
        $state->bindParam(1,$idTacos);
        $state->execute();
        $resultas=$state->fetchAll();
        $resultasMessage=$resultas[0];
        $Tacos->setIdTacos($idTacos);
        $Tacos->setTaille($resultasMessage["taille"]);
        $Tacos->setNomTacos($resultasMessage["nomTacos"]);
        $Tacos->setIdSauce($resultasMessage["idSauce"]);
        $Tacos->setIdViande($resultasMessage["idViande"]);
        return $Tacos;   
    }
     public static function insertTacos($idTacos,$nomTacos,$taille,$idSauce,$idViande)
    {
         $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("INSERT INTO Sujet(idTacos,nomTacos,taille,idSauce,idViande)
VALUES(?,?,?,?,?)");
         $state->bindParam(1,$idTacos);
         $state->bindParam(2,$nomTacos);
         $state->bindParam(3,$taille);
         $state->bindParam(4,$idSauce);
         $state->bindParam(5,$idViande);
         $state->execute();
            
        
    }
    public static function deleteTacos($idTacos)
    {
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("DELETE FROM Tacos WHERE idTacos=?");
        $state->bindParam(1,$idTacos);
        $state->execute();
    }
    public static function UpdateTacos($Tacos)
    {
        $idTacos=$Tacos->getIdTacos();
        $taille=$Tacos->getTaille();
        $nomTacos=$Tacos->getNomTacos();
        $idSauce=$Tacos->getIdSauce();
        $idViande=$Tacos->getIdViande();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("UPDATE Tacos SET taille=?,nomTacos=?,idSauce=?,idViande=? WHERE idTacos=?");
        $state->bindParam(1,$taille);
        $state->bindParam(2,$nomTacos);
        $state->bindParam(3,$idSauce);
        $state->bindParam(4,$idViande);
        $state->bindParam(5,$idTacos);
        $state->execute();
    }
}
