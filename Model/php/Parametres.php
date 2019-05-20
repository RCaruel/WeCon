<?php
include ('Model/php/_connexionbdd.php');
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
        $req = $bdd->prepare("SELECT * FROM parametres WHERE iduser =? ");
        $req->execute(array($iduser));
        $verif = $req->rowCount();
        if ($verif == 0) {
            $maj = $bdd->prepare("INSERT INTO parametres(iduser, synchro, releve, acces, historique, partage) VALUES(?, ?, ?, ?, ?, ?)");
            $maj->execute(array($iduser, $synchro, $releve, $acces, $clean, $partage));
        } else {
            $sql = "UPDATE parametres SET synchro= ? , releve= ? , acces=? , historique=? , partage=?  WHERE (iduser = ?)";
            $maj = $bdd->prepare($sql);
            $maj->execute(array($synchro, $releve, $acces, $clean, $partage, $_SESSION['id']));
        }
        
    }
    Parametre();
    
    ?>
