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

        $req = $bdd->prepare("DELETE FROM membres WHERE ID = ?");
        $req -> execute(array($userID));
    }
}
?>