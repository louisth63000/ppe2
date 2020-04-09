<?php
include_once ('tools/DatabaseLinkers.php');
include_once ('DTO/Boisson.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BoissonManager
 *
 * @author utilisateur
 */
class BoissonManager {
    public static function  findBoisson($idBoisson)
    {
        $Boisson=new Boisson();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("SELECT * FROM Boisson WHERE idBoisson=?");
        $state->bindParam(1,$idBoisson);
        $state->execute();
        $resultas=$state->fetchAll();
        $resultasMessage=$resultas[0];
        $Boisson->setIdBoisson($idBoisson);
        $Boisson->setNomBoisson($resultasMessage["nomBoisson"]);
        return $Boisson;   
    }
    public static function findAllBoisson()
    {
        $listBoisson=array();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("SELECT * FROM Boisson");
        $state->execute();
        $resultas=$state->fetchAll();
        foreach($resultas as $lineresultas)
        {
             $Boisson= BoissonManager::findBoisson($lineresultas["idBannit"]);
             $listBoisson[]=$Boisson;
        }
        return $listBoisson;
    }
}
