<?php
/**
 * Created by PhpStorm.
 * User: antoi
 * Date: 15/04/2019
 * Time: 15:28
 */

function supprimer($userID)
{
    require('_connexionbdd.php');

    if ($userID != null) {
        $bdd = my_pdo_connexxionWeCon();
        $req = $bdd->prepare("DELETE FROM sousmembres WHERE identifiant = ?");
        $req -> execute(array($userID));
    }
}

function modifier($userID){
    require('_connexionbdd.php');

    if ($userID != null) {
        $bdd = my_pdo_connexxionWeCon();
        $req = $bdd -> prepare("SELECT * FROM sousmembres WHERE identifiant = ?");
        $req -> execute(array($userID));
        $req = $req -> fetch();
        echo '<html><input type = "hidden" id="nom" value = ' . $req['nom'] . '>
        <input type = "hidden" id="prenom" value = ' . $req['prenom'] . '>
        <input type = "hidden" id="mail" value = ' . $req['mail'] . '>
        <input type = "hidden" id="identifiant" value = ' . $req['identifiant'] . '>
        <script src="Views/js/insertdata.js"></script></html>';
    }
    supprimer($userID);
}

?>