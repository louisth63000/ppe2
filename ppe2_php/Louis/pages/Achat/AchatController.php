<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AchatController
 *
 * @author utilisateur
 */
class AchatController {
    public function includeView()
    {
        include_once ('Achat.php');
    }
    public static function error($idA)
    {?>
        <p style="color: red">
                    <?php switch ($idA)
                    {
                        case 0:
                            break;
                        case 1:
                            echo 'Veuillez remplir tout les cases de connexion';
                            break;
                        case 2:
                            echo 'Le pseudo ou le mot de passe est invalide';
                            break;
                        case 3:
                            echo 'Veuillez remplir tout les cases de creation de compte';
                            break;
                        case 4:
                            echo 'Ce pseudo à deja était pris';
                            break;
                    }
                ?></p>
                    <?php
    }
    public static function Prix()
    {
        $Menu=$_SESSION["Menu"];
        $Boisson=array();
        $Boisson=$_SESSION["Boisson"];
        $Prix=0;
        switch ($Menu)
        {
            case 1:
                $Prix=5;
                break;
            case 2:
                $Prix=7;
                break;
            case 3:
                $Prix=9;
                break;
        }
        for($i=0;$i<sizeof($Boisson);$i++)
        {
            if($Boisson[$i] !=0)
            {
                $Prix+=$Boisson[$i];
            }
        }
        return $Prix;
    }
    public function verification($Menu,$listSauce)
    {
        switch ($Menu)
        {
            case 1:
                if(sizeof($listSauce)<2 )
                {
                    $_SESSION["Sauce"] = $listSauce;
                }else if(sizeof($listSauce)>=2)
                {
                    header('Location: index.php?page=ChoixSauce&idS=2');
                    exit;
                }else if(sizeof($listSauce) ==0 )
                {
                    header('Location: index.php?page=ChoixSauce&idS=1');
                    exit;
                }
                break;
            case 2:
            case 3:
                if(sizeof($listSauce)<3)
                {
                    $_SESSION["Sauce"] = $listSauce;
                }else if(sizeof($listSauce) ==3)
                {
                    header('Location: index.php?page=ChoixSauce&idS=3');
                    exit;
                }else if(sizeof($listSauce) ==0)
                {
                    header('Location: index.php?page=ChoixSauce&idS=1');
                    exit;
                }
                break;
            
        }
    }
}
