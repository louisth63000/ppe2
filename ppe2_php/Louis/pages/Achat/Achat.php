<?php
include_once ('AchatController.php');
$Prix=AchatController::Prix();
?>

<link rel="stylesheet" type='text/css' href="pages/connexion/ConnexionActivity.css">   

<div class="block-general">
    <p>Le prix de la commande est:<?php echo $Prix ?></p>
     <p>Veuillez remplir les informations ci dessous</p>
            <div class="login" style="margin-right: 200px">
                    <h1>Information pour la livraison</h1>
                    <form action="index.php?page=Confirmation" method="post">
                            <p>nom:</p>
                            <input type="text" name="nom" placeholder="nom"  value="" >
                            <p>Prenom:</p>
                            <input type="text" name="prenom" placeholder="prenom"  value="" >
                            <p>Adresse:</p>
                            <input type="password" name="adresse" placeholder="ex: 5 rue Bansac"  value="" >
                            <input type="submit" value="Commander" >
                    </form>	
            </div>
         


