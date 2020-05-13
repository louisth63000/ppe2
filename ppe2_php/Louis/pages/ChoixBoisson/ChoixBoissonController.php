<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChoixBoisson
 *
 * @author utilisateur
 */
class ChoixBoissonController {
   public function includeView()
    {
        include_once ('ChoixBoisson.php');
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
