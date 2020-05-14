<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link rel="stylesheet" type='text/css' href="pages/ChoixViande/ChoixViande.css">
<div class="phrase">
    <h1> Quel menu souhaitez-vous commander ? </h1>
</div>
<div class="container-blocks">
    <form action="index.php?page=ChoixSauce" method="post">
    <div class="Viande">
        <div class="ViandeChoix">
                <h2>Viande rouge</h2>
                <div class="container_img">
                    <div class="cadre">
                        <img src="pages/ChoixViande/Images/vianderouge.png" class="img2">
                    </div>
                </div>
                <input name="Viande[]" type="checkbox"  value="1" id="Check" hidden> 
                <label for="Check" class="checkmark"></label>
            </div>
        <div class="ViandeChoix">
            <h2>Nugget</h2>
            <div class="container_img">
                    <div class="cadre">
                        <img src="pages/ChoixViande/Images/nugget.jpg" class="img2" >
                    </div>
                </div>
                <input name="Viande[]" type="checkbox"  value="2" id="Check1" hidden> 
                <label for="Check1" class="checkmark"></label>
            </div>
        <div class="ViandeChoix">
                <h2>Escalope de dinde</h2>
                <div class="container_img">
                    <div class="cadre">
                        <img src="pages/ChoixViande/Images/escalope.jpg" class="img2" >
                    </div>
                </div>
                <input name="Viande[]" type="checkbox"  value="3" id="Check2" hidden> 
                <label for="Check2" class="checkmark"></label>
            </div>
    </div>
    <div class="container_submit">
        <input type="submit" value="Continuer" >
    </div>
    </form>
</div>

