<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChoixSauceController
 *
 * @author utilisateur
 */
class ChoixSauceController {
    public function includeView()
    {
        include_once ('ChoixSauce.php');
    }
    public function verification($Menu,$listViande)
    {
        switch ($Menu)
        {
            case 1:
                if(sizeof($listViande)<2 )
                {
                    $_SESSION["Viande"] = $listViande;
                }else
                {
                    header('Location: index.php?page=ChoixViande&idV=2');
                    exit;
                }
                break;
            case 2:
                if(sizeof($listViande)<3)
                {
                    $_SESSION["Viande"] = $listViande;
                }else
                {
                    header('Location: index.php?page=ChoixViande&idV=3');
                    exit;
                }
                break;
            case 3:
                if(sizeof($listViande)<4)
                {
                      $_SESSION["Viande"] = $listViande;
                }else
                {
                    header('Location: index.php?page=ChoixViande&idV=4');
                    exit;
                }
                break;
        }
    }
    public static function error($idS)
    {?>
        <p style="color: red">
                    <?php switch ($idS)
                    {
                        case 1:
                            echo 'Veuillez selectionner au moins une Sauce';
                            break;
                        case 2:
                            echo 'Vous ne pouvez selectionner qu une Sauce';
                            break;
                        case 3:
                            echo 'Vous ne pouvez selectionner que 2 Sauce';
                            break;
                        case 4:
                            echo 'Vous ne pouvez selectionner que 3 Sauce';
                            break;
                    }
                ?></p>
                    <?php
    }
}
