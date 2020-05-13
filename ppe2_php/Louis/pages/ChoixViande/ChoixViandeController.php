<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChoixViandeController
 *
 * @author utilisateur
 */
class ChoixViandeController {
    public function includeView()
    {
        include_once ('ChoixViande.php');
    }
    public function redirectUser()
    {
        header('Location: index.php?page=Home');
        exit;
    }
    public static function error($idV)
    {?>
        <p style="color: red">
                    <?php switch ($idV)
                    {
                        case 1:
                            echo 'Veuillez selectionner au moins une viande';
                            break;
                        case 2:
                            echo 'Vous ne pouvez selectionner qu une viande';
                            break;
                        case 3:
                            echo 'Vous ne pouvez selectionner que 2 viande';
                            break;
                        case 4:
                            echo 'Vous ne pouvez selectionner que 3 viande';
                            break;
                    }
                ?></p>
                    <?php
    }
}
