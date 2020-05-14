<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link rel="stylesheet" type='text/css' href="pages/ChoixSauce/ChoixSauce.css">
<div class="phrase">
    <h1> Quel menu souhaitez-vous commander ? </h1>
</div>
<div class="container-blocks">
    <form action="index.php?page=ChoixBoisson" method="post">
    <div class="Sauce">
        <div class="SauceChoix">
                <h2>Sauce wok</h2>
                <div class="container_img">
                    <div class="cadre">
                        <img src="pages/ChoixSauce/Images/Sauce wok.jpg" class="img2">
                    </div>
                </div>
                <input name="Sauce[]" type="checkbox"  value="1" id="Check" hidden>  
                <label for="Check" class="checkmark"></label>
            </div>
        <div class="SauceChoix">
            <h2>Sauce épicé</h2>
            <div class="container_img">
                    <div class="cadre">
                        <img src="pages/ChoixSauce/Images/Sauce epicé.jpg" class="img2" style="margin-top: -27px;" >
                    </div>
                </div>
            <input name="Sauce[]" type="checkbox"  value="2" id="Check1" hidden> 
                <label for="Check1" class="checkmark"></label>
            </div>
        <div class="SauceChoix">
                <h2>sauce banche</h2>
                <div class="container_img">
                    <div class="cadre">
                        <img src="pages/ChoixSauce/Images/Sauce Blanche.jpg" class="img2" >
                    </div>
                </div>
                <input name="Sauce[]" type="checkbox"  value="3" id="Check2" hidden> 
                <label for="Check2" class="checkmark"></label>
            </div>
    </div>
    <div class="container_submit">
        <div class="container_Boisson">
            <p>Si vous voulez ajouter des boisson à votre commande cliquer</p>
            <input name="listBoisson[]" type="checkbox" value="1" id="Check3" hidden>
            <label for="Check3" class="checkmark" style="    margin-left: 15px;margin-top: 24px;"></label>
        </div>
        <input type="submit" value="Continuer" >
    </div>
    </form>
</div>
