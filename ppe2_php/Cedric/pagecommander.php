<!DOCTYPE html>
<?php
    include_once ('header.php');
?>
<link rel="stylesheet" type="text/css" href="pagecommander.css" media="all">
    <div class="phrase">
        <h1> Quel menu souhaitez-vous commander ? </h1>
    </div>
    <div class="container-blocks">
        <div class="menu">
            <div class="menu_m">
                <h1> Menu M </h1>
                <p>- 1 viande</p>
                <p>- 1 sauce</p>
                <div class="container_img">
                    <div class="cadre">
                        <img src="image3.jpg" class="img2">
                    </div>
                </div>
                <p class="prix">5€</p>
                <form action="index.php?page=ChoixViande" method="post">
                    <input type="hidden" name="Menu" value="3">
                    <input type="submit" value="Menu M" >
                </form>	
            </div>
            <div class="menu_m">
                <h1> Menu L </h1>
                <p>- 2 viande </p>
                <p>- 2 sauce</p>
                <div class="container_img">
                    <div class="cadre">
                        <img src="image2.jpg">
                    </div>
                </div>
                <p class="prix">7€</p>
                <form action="index.php?page=ChoixViande" method="post">
                    <input type="hidden" name="Menu" value="3">
                    <input type="submit" value="Menu L" >
                </form>	
            </div>
            <div class="menu_m">
                <h1> Menu XXL </h1> 
                <p>- 3 viande</p>
                <p>- 2 sauce</p>
                <div class="container_img">
                    <div class="cadre">
                        <img src="image4.jpg">	
                    </div>
                </div>
                <p class="prix">9€</p>
                <form action="index.php?page=ChoixViande" method="post">
                    <input type="hidden" name="Menu" value="3">
                    <input type="submit" value="Menu XL" >
                </form>
            </div>
        </div>
    </div>




