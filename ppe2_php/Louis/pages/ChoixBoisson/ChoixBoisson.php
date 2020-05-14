<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link rel="stylesheet" type='text/css' href="pages/ChoixBoisson/ChoixBoisson.css">
<div class="box">               
    <div class="phrase">
        <h1> Quel boisson souhaitez-vous commander ? </h1>
    </div>
    <div class="container-blocks">
        <form action="index.php?page=Achat" method="post">
        <div class="Boisson">
            <div class="BoissonChoix">
                    <h2>Coca cola</h2>
                    <div class="container_img">
                        <div class="cadre">
                            <img src="pages/ChoixBoisson/Images/Cocacola.jpg" class="img2" style="    margin-top: 0px;max-width: 200px;">
                        </div>
                    </div>
                    <select name="CocaCola">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
            </div>
            <div class="BoissonChoix">
                <h2>Volvic</h2>
                <div class="container_img">
                        <div class="cadre">
                            <img src="pages/ChoixBoisson/Images/Volvic.jpg" class="img2" style="margin-top: -9px;" >
                        </div>
                </div>
                <select name="Volvic">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
           </div>
            <div class="BoissonChoix">
                    <h2>Quezac</h2>
                    <div class="container_img">
                        <div class="cadre">
                            <img src="pages/ChoixBoisson/Images/Quezac.jpg" class="img2" >
                        </div>
                    </div>
                <select name="Quezac">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="BoissonChoix">
                    <h2>IceTea</h2>
                    <div class="container_img">
                        <div class="cadre">
                            <img src="pages/ChoixBoisson/Images/IceTea.jpg" class="img2" >
                        </div>
                    </div>
                <select name="Icetea">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="BoissonChoix">
                    <h2>Oasis</h2>
                    <div class="container_img">
                        <div class="cadre">
                            <img src="pages/ChoixBoisson/Images/Oasis.jpg" class="img2" >
                        </div>
                    </div>
                <select name="Oasis">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="BoissonChoix">
                    <h2>Limonade</h2>
                    <div class="container_img">
                        <div class="cadre">
                            <img src="pages/ChoixBoisson/Images/limonade.jpg" class="img2" >
                        </div>
                    </div>
                <select name="limonade">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
        <div class="container_submit">
            <input type="submit" value="Continuer" >
        </div>
        </form>
    </div>
</div>    
