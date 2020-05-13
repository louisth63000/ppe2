<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuController
 *
 * @author utilisateur
 */
class MenuController {
    //put your code here
     public function includeView()
    {
        include_once ('Menu.php');
    }
    public function redirectUser()
    {
        header('Location: index.php?page=Home');
        exit;
    }
}
