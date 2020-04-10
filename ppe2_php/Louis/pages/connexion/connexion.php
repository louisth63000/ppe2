

<link rel="stylesheet" type='text/css' href="pages/connexion/ConnexionActivity.css">
<div class="block-general">
            <div class="login" style="margin-right: 200px">
                    <h1>Connexion</h1>
                    <form action="index.php?page=conneexion" method="post">
                            <p>Email:</p>
                            <input type="text" name="email" placeholder="email"  value="" >
                            <input type="hidden" name="Action" value="1">
                            <p>Mot de passe:</p>
                            <input type="password" name="MDP" placeholder="Mot de passe"  value="" >
                            <input type="submit" value="Connexion" >
                    </form>	
            </div>
            <div class="login">
                    <h1>Creation de compte</h1>
                    <form action="index.php?page=conneexion" method="post">
                            <p>Email:</p>
                            <input type="text" name="pseudo" placeholder="pseudo"  value="" >
                            <input type="hidden" name="Action" value="2">
                            <p>Mot de passe:</p>
                            <input type="password" name="MDP" placeholder="Mot de passe"  value="" >
                            <input type="submit" value="Creation de compte">
                    </form>
            </div>
        </div>

