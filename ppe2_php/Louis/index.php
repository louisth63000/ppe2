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

                        include_once ('tools/DatabaseLinkers.php');


			if(!empty($_GET['page'])) 
			{
				$page = $_GET['page'];
			}
			else
			{
				$page = "connexion";
			}

			switch($page)
			{
				case "connexion" : 

					include_once("pages/connexion/ControllerConnexion.php");

					$instanceController = new ControllerConnexion();
					$instanceController->includeView();
                                        if(!empty($_POST['email']) && !empty($_POST['MDP'])) 
					{
                                            if($_POST['Action']==1)
                                            {
                                                if ($instanceController->authenticate($_POST['email'], $_POST['MDP']) == -1)
						{
                                                    header('Location: index.php?page=connexion');
                                                    exit;
						}
                                            }else
                                            {
                                                
                                            }
					}

					break;
                                default: 
                                    
					break;
			}

	?>		

	</body>
</html>