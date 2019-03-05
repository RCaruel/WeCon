<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}
if(isset($_POST['forminscription'])) {
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = sha1($_POST['mdp']);
    if(!empty($_POST['mail'])AND !empty($_POST['mdp'])) {
        $reqmail= $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
        $reqmail->execute(array($mail));
        $mailexist = $reqmail->rowCount();
        if($mailexist != 0) {
            $reqmdp= $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
            $reqmdp->execute(array($mail ,$mdp));
            $mailmdpexist = $reqmdp->rowCount();
            if( $mailmdpexist != 0 ) {
                $erreur = "oui ! <a href=\"bulle.php\">Me connecter</a>";
            }
            else{
                $erreur = "Mot de passe incorrect";
            }
        }
        else{
            $erreur = "Compte innexistant";
        }
    }
    else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
echo "S'inscrire ! <a href=\"inscription.php\">Inscription</a>";
?>
<html>
<head>
    <title>weCon Connexion</title>
    <meta charset="utf-8">
</head>
<body>
<div align="center">
    <h2>Connexion</h2>
    <br /><br />
    <form method="POST" action="">
        <table>
            <td align="right">
                <label for="mail">Mail :</label>
            </td>
            <td>
                <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
            </td>
            </tr>


            <tr>
                <td align="right">
                    <label for="mdp">Mot de passe :</label>
                </td>
                <td>
                    <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                </td>
            </tr>

            <tr>
                <td></td>
                <td align="center">
                    <br />
                    <input type="submit" name="forminscription" value="Connexion" />
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($erreur)) {
        echo '<font color="red">'.$erreur."</font>";
    }
    ?>
</div>
</body>
</html>