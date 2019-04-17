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
        $req = $bdd->prepare("DELETE FROM Capteur WHERE Id = ?");
        $req -> execute(array($userID));
    }
}

function modifier($userID){
    require('_connexionbdd.php');

    if ($userID != null) {
        $bdd = my_pdo_connexxionWeCon();
        $req = $bdd -> prepare("SELECT * FROM Capteur WHERE Id = ?");
        $req -> execute(array($userID));
        $req = $req -> fetch();
        echo '<html><input type = "hidden" id="nomCapteur" value = ' . $req['Nom'] . '>
        <input type = "hidden" id="Id_Piece" value = ' . $req['Id_Piece'] . '>
        <script src="Views/js/insertdataCapteur.js"></script></html>';
    }
    supprimer($userID);
}

?>