<?php

include ('Model/php/_connexionbdd.php');

function verif()
{
    try {
        if (!empty(($_POST['identifiant'] AND $_POST['nom'] AND $_POST['prenom'] AND $_POST['mail']))) {
            function existeIdentifiant($identifiant)
            {
                $bdd = my_pdo_connexxion();
                $reqpseudo = $bdd->prepare("SELECT * FROM `membres` ORDER BY `membres`.`identifiant` ASC  ");
                $reqpseudo->execute(array($identifiant));
                $pseudoexist = $reqpseudo->rowCount();
                return ($pseudoexist > 0);
            }

            if (existeIdentifiant($_POST['identifiant'])) {
                echo 'Identifiant déjà utilisé';
                return (FALSE);
            } else {
                $req = $bdd->prepare('INSERT INTO membres(identifiant, nom, prenom, mail, type_utilisateur)VALUES(?,?,?,?,?)');
                $req->execute(array($_POST['identifiant'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], 'Client'));
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
?>

