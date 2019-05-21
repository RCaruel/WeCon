<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 20/05/2019
 * Time: 17:33
 */

include "Model/php/_connexionbdd.php";

function increaseNbMessages(){
    $bdd = my_pdo_connexxionWeCon();
    $dateOfToday = date("Y-m-d", time() - 86400*0);
    $req = $bdd -> prepare("SELECT * FROM globaldata WHERE jour = ?");
    $req->execute(array($dateOfToday));
    $nb = $req->rowCount();
    $value = $req->fetchAll()[0]["nbMessages"];
    if ($nb == 0) {
        $maj = $bdd->prepare("INSERT INTO globaldata(jour, nbClients, nbVentes, nbPannes, nbMessages) VALUES(?, ?, ?, ?, ?)");
        $maj->execute(array($dateOfToday,random_int(1,160),random_int(1,160),random_int(1,160),1));
    } else {
        $number = $value + 1;
        $maj = $bdd->prepare("UPDATE globaldata SET nbMessages = ?  WHERE jour = ?");
        $maj->execute(array($number, $dateOfToday));
    }
}