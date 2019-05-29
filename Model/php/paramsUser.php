<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 20/05/2019
 * Time: 16:09
 */
include ('Model/php/_connexionbdd.php');
if (isset($_GET["action"])) {
function getUserParams()
{
    $bdd = my_pdo_connexxionWeCon();
    $reqs = $bdd->prepare("SELECT * FROM parametres WHERE Id_Membres =?");
    $reqs->execute(array($_SESSION['id']));
    $userData = $reqs->fetchAll();
    try {
        return $userData[0];
    }catch (Exception $e){
        $userData['synchro'] == "non";
        $userData['releve'] == "non";
        $userData['acces'] == "non";
        $userData['historique'] == "non";
        $userData['partage'] == "non";

        return $userData;
    }
}

function Parametre()
    {
        if (!empty($_POST["synchro"])) {
            $synchro = "oui";
        } else {
            $synchro = "non";
        }
        if (!empty($_POST["releve"])) {
            $releve = "oui";
        } else {
            $releve = "non";
        }
        if (!empty($_POST["acces"])) {
            $acces = "oui";
        } else {
            $acces = "non";
        }
        if (!empty($_POST["clean"])) {
            $clean = "oui";
        } else {
            $clean = "non";
        }
        if (!empty($_POST["partage"])) {
            $partage = "oui";
        } else {
            $partage = "non";
        }
        $bdd = my_pdo_connexxionWeCon();
        $iduser = $_SESSION["id"];
        $req = $bdd->prepare("SELECT * FROM parametres WHERE Id_Membres =? ");
        $req->execute(array($iduser));
        $verif = $req->rowCount();
        if ($verif == 0) {
            $maj = $bdd->prepare("INSERT INTO parametres(Id_Membres, synchro, releve, acces, historique, partage) VALUES(?, ?, ?, ?, ?, ?)");
            $maj->execute(array($iduser, $synchro, $releve, $acces, $clean, $partage));
        } else {
            $sql = "UPDATE parametres SET synchro= ? , releve= ? , acces=? , historique=? , partage=?  WHERE (Id_Membres = ?)";
            $maj = $bdd->prepare($sql);
            $maj->execute(array($synchro, $releve, $acces, $clean, $partage, $_SESSION['id']));
        }
        
    }
}