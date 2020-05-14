    <?php 

	if (empty($_SESSION))
	{
		session_name("issou");
		session_start();
	}
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
                <meta charset="utf-8" />
		<title>L'Empire des Tacos</title>		
	</head>
	<body>
	<?php
                        include_once ('Header/header.php');
                        include_once ('tools/DatabaseLinkers.php');


			if(!empty($_GET['page'])) 
			{
				$page = $_GET['page'];
                                
			}
			else
			{
				$page = "Menu";
			}
			switch($page)
			{
				case "Home":
                                    
                                    break;
                                case "Menu":
                                    include_once("pages/Menu/MenuController.php");

					$instanceController = new MenuController();
					$instanceController->includeView();
                                       
                                    break;
                                case "ChoixViande":
                                    include_once ("pages/ChoixViande/ChoixViandeController.php");
                                    
                                        $instanceController = new ChoixViandeController();
                                        if(!empty($_GET['idV']))
                                        {
                                            $instanceController->error($_GET['idV']);
                                        }
                                        $instanceController->includeView();
                                        if(!empty($_POST['Menu']))
                                        {
                                             $_SESSION["Menu"] = $_POST['Menu'];
                                        }
                                        
                                    break;
                                case "ChoixSauce":
                                    $Menu=$_SESSION["Menu"];
                                    include_once ('pages/ChoixSauce/ChoixSauceController.php');
                                    $instanceController= new ChoixSauceController();
                                    if(!empty($_POST["Viande"]))
                                    {
                                        $listViande=$_POST["Viande"];
                                        $instanceController->verification($Menu, $listViande);
                                    }else if(!empty($_SESSION["Viande"]))
                                    {
                                        
                                    }
                                    else
                                    {
                                        header('Location: index.php?page=ChoixViande&idV=1');
                                        exit;
                                    }
                                    if(!empty($_GET['idS']))
                                    {
                                        $instanceController->error($_GET['idS']);
                                    }
                                    $instanceController->includeView();
                                    break;
                                case "ChoixBoisson":
                                    include_once('pages/ChoixBoisson/ChoixBoissonController.php');
                                    $instanceController=new ChoixBoissonController();
                                    if(!empty($_POST["Sauce"]))
                                    {
                                        $instanceController->verification($_SESSION["Menu"], $_POST["Sauce"]);
                                    }else
                                    {
                                        header('Location: index.php?page=ChoixSauce&idS=1');
                                        exit;
                                    }
                                    if(empty($_POST["listBoisson"]))
                                    {
                                        header('Location: index.php?page=Achat');
                                        exit;
                                    }
                                    $instanceController->includeView();
                                    break;
                                case "Achat":
                                    include_once ('pages/Achat/AchatController.php');
                                    $instanceController=new AchatController();
                                    if(!empty($_POST["CocaCola"]) || !empty($_POST["Volvic"]) || !empty($_POST["Quezac"]) ||!empty($_POST["Icetea"]) || !empty($_POST["Oasis"]) || !empty($_POST["limonade"]))
                                    {
                                        
                                        $listboisson=array();
                                        $listboisson[0]=$_POST["CocaCola"];
                                        $listboisson[1]=$_POST["Volvic"];
                                        $listboisson[2]=$_POST["Quezac"];
                                        $listboisson[3]=$_POST["Icetea"];
                                        $listboisson[4]=$_POST["Oasis"];
                                        $listboisson[5]=$_POST["limonade"];
                                        $_SESSION["Boisson"]=$listboisson;
                                        
                                    }
                                    $instanceController->includeView();
                                    
                                    break;
                                case "Confirmation":
                                    include_once ('pages/Confirmation/ConfirmationController.php');
                                    $instanceController=new ConfirmationController();
                                    if(!empty($_GET['idC']))
                                    {
                                        $instanceController->error($_GET['idC']);
                                    }
                                    if(!empty($_POST["adresse"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) )
                                    {
                                        if(!empty($_SESSION["Menu"]))
                                        {
                                        $instanceController->Commande($_POST["adresse"], $_POST["nom"],$_POST["prenom"]);
                                        }
                                    } else {
                                        header('Location: index.php?page=Confirmation?idC=1');
                                        exit;
                                    }
                                    
                                    
                                    break;
                                default: 
                                    
					break;
			}

	?>		

	</body>
</html>