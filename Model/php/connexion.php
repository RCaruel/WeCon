<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=wecon', 'root', '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$type = $_GET["type"];

if(isset($_POST['forminscription'])) {
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = sha1($_POST['mdp']);
    $typeCompte=$_GET["type"];
    if(!empty($_POST['mail'])AND !empty($_POST['mdp'])) {
        $reqmail= $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
        $reqmail->execute(array($mail));
        $mailexist = $reqmail->rowCount();
        if($mailexist != 0) {
            $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ? AND TypeCompte = ?");
            $requser->execute(array($mail, $mdp, $typeCompte));
            $userexist = $requser->rowCount();
            if ($userexist != 0) {
                $userinfo = $requser->fetch();
                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['pseudo'] = $userinfo['pseudo'];
                $_SESSION['mail'] = $userinfo['mail'];
                $_SESSION['type'] = $type;
                header("Location: index.php?action=Espace_" . $type);
            } else {
                $erreur = "Mot de passe incorrect";
            }
        }
        else{
            $erreur = "Compte inexistant";
        }
    }
    else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
echo $erreur;
?>
