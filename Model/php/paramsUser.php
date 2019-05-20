<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 20/05/2019
 * Time: 16:09
 */
function getUserParams(){
    $bdd = my_pdo_connexxionWeCon();
    $reqs = $bdd->prepare("SELECT * FROM parametres WHERE iduser =?");
    $reqs->execute(array($_SESSION['id']));
    $userData = $reqs->fetchAll();
    return $userData[0];
}

function validateParams($synchro, $releve, $acces, $clean, $partage){
    $bdd = my_pdo_connexxionWeCon();
    $iduser = $_SESSION["id"];
    $req = $bdd->prepare("SELECT * FROM parametres WHERE iduser =? ");
    $req->execute(array($iduser));
    $verif = $req->rowCount();
    $data = [
        'iduser' => $iduser,
        'synchro' => $synchro,
        'releve' => $releve,
        'acces' => $acces,
        'historique' => $clean,
        'partage' => $partage,
    ];
    if ($verif == 0) {
        $maj = $bdd->prepare("INSERT INTO parametres(iduser, synchro, releve, acces, historique, partage) VALUES(?, ?, ?, ?, ?, ?)");
        $maj->execute(array($iduser, $synchro, $releve, $acces, $clean, $partage));
    } else {
        $sql = "UPDATE parametres SET synchro= ? , releve= ? , acces=? , historique=? , partage=?  WHERE (iduser = ?)";
        $maj = $bdd->prepare($sql);
        $maj->execute(array($synchro, $releve, $acces, $clean, $partage, $_SESSION['id']));
    }
}