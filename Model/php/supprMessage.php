<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 20/05/2019
 * Time: 16:51
 */

function supprMessage(){
    include "Model/php/_connexionbdd.php";
    $idMessage = $_GET['id'];
    $bdd = my_pdo_connexxionWeCon();
    $req = $bdd-> prepare("DELETE FROM rapport WHERE id = ".$idMessage);
    $req -> execute(array($idMessage));
}