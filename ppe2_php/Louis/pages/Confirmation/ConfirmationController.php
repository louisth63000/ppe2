<?php
include_once ('DAO/TacosManager.php');
include_once ('DAO/CommandeManager.php');
include_once ('DAO/BoissonManager.php');
include_once ('DAO/SauceManager.php');
include_once ('DAO/ViandeManager.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConfirmationController
 *
 * @author utilisateur
 */
class ConfirmationController {
    //put your code here
    public static function includeview()
    {
        
    }
    public static function error($idA)
    {?>
        <p style="color: red">
                    <?php switch ($idA)
                    {
                        case 0:
                            break;
                        case 1:
                            echo 'Veuillez remplir tout les cases d information';
                            break;
                    }
                ?></p>
                    <?php
    }
    public static function Commande($nom,$prenom,$adresse)
    {
        $taille="";
        switch ($_SESSION["Menu"])
        {
            case 1:
                $taille="M";
                break;
            case 2:
                $taille="L";
                break;
            case 3:
                $taille="XL";
                break;
        }
        
        $idTacos=TacosManager::insertTacos("tacos",$taille);
        $idCommande= CommandeManager::insertCommande($idTacos, $nom, $prenom, $adresse);
        if(!empty($_SESSION["Boisson"]))
        {
            $listBoisson=$_SESSION["Boisson"];
            for($i=0;$i<sizeof($listBoisson);$i++)
            {
                for($j=0;$j<$listBoisson[$i];$j++)
                {
                    switch ($i)
                    {
                        case 0:
                            BoissonManager::insertBoisson("CocaCola", $idCommande);
                            break;
                        case 1:
                            BoissonManager::insertBoisson("Volvic", $idCommande);
                            break;
                        case 2:
                            BoissonManager::insertBoisson("Quezac", $idCommande);
                            break;
                        case 3:
                            BoissonManager::insertBoisson("Icetea", $idCommande);
                            break;
                        case 4:
                            BoissonManager::insertBoisson("Oasis", $idCommande);
                            break;
                        case 5:
                            BoissonManager::insertBoisson("limonade", $idCommande);
                            break;

                    }
                }
            }
        }
     $listSauce=$_SESSION["Sauce"];
     for($i=0;$i<sizeof($listSauce);$i++)
     {
         switch ($listSauce[$i])
                {
                   
                    case 1:
                        SauceManager::insertSauce("Blanche", $idTacos);
                        break;
                    case 2:
                        SauceManager::insertSauce("Samourai", $idTacos);
                        break;
                    case 3:
                        SauceManager::insertSauce("Special", $idTacos);
                        break;
                    
                }
     }
     $listViande=$_SESSION["Viande"];
     for($i=0;$i<sizeof($listViande);$i++)
     {
         switch ($listViande[$i])
                {
                   
                    case 1:
                        ViandeManager::insertViande("Rouge", $idTacos);
                        break;
                    case 2:
                        ViandeManager::insertViande("hachié", $idTacos);
                        break;
                    case 3:
                        ViandeManager::insertViande("Charolaise", $idTacos);
                        break;
                    
                }
     }
     session_destroy();
    }
}
