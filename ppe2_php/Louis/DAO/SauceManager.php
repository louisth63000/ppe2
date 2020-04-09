<?php
include_once ('tools/DatabaseLinkers.php');
include_once ('DTO/Sauce.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SauceManager
 *
 * @author utilisateur
 */
class SauceManager {
    public static function  findSauce($idSauce)
    {
        $Sauce=new Sauce();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("SELECT * FROM Sauce WHERE idSauce=?");
        $state->bindParam(1,$idSauce);
        $state->execute();
        $resultas=$state->fetchAll();
        $resultasMessage=$resultas[0];
        $Sauce->setIdSauce($idSauce);
        $Sauce->setNomSauce($resultasMessage["nomSauce"]);
        return $Sauce;   
    }
    public static function findAllSauce()
    {
        $listSauce=array();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("SELECT * FROM Sauce");
        $state->execute();
        $resultas=$state->fetchAll();
        foreach($resultas as $lineresultas)
        {
             $Sauce= BoissonManager::findBoisson($lineresultas["idSauce"]);
             $listSauce[]=$Sauce;
        }
        return $listSauce;
    }
}
