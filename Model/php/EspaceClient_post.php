<?php

include ('Model/php/_connexionbdd.php');

function verif()
{
    try {
        if (!empty(($_POST['identifiant'] AND $_POST['nom'] AND $_POST['prenom'] AND $_POST['mail']))) {
            function existeIdentifiant($identifiant)
            {
                $bdd = my_pdo_connexxionWEcon();
                $reqpseudo = $bdd->prepare("SELECT * FROM sousmembres WHERE identifiant = ?");
                $reqpseudo->execute(array($identifiant));
                $pseudoexist = $reqpseudo->rowCount();
                return ($pseudoexist > 0);
            }

            if (existeIdentifiant($_POST['identifiant'])) {
                echo 'Identifiant déjà utilisé';
                return (FALSE);
            } else {
                $bdd = my_pdo_connexxionWeCon();
                $req = $bdd->prepare('INSERT INTO sousmembres(identifiant, nom, prenom, mail, Id_Membres)VALUES(?,?,?,?,?)');
                $req->execute(array($_POST['identifiant'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_SESSION['id']));
                return (TRUE);
            }
        } else {
            echo 'Merci de bien remplir tous les champs';
            return (FALSE);
        }
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}
verif();
?>

