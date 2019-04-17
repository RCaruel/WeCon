<?php

include ('Model/php/_connexionbdd.php');

function verif()
{
    try {
        if (!empty($_POST['Nom'] AND $_POST['Id_Piece'])) {
            function existeIdentifiant($identifiant)
            {
                $bdd = my_pdo_connexxionWeCon();
                $reqpseudo = $bdd->prepare("SELECT * FROM capteur WHERE Nom = ?");
                $reqpseudo->execute(array($identifiant));
                $pseudoexist = $reqpseudo->rowCount();
                return ($pseudoexist > 0);
            }

            if (existeIdentifiant($_POST['Nom'])) {
                echo 'Identifiant déjà utilisé';
                return (FALSE);
            } else {
                $bdd = my_pdo_connexxionWeCon();
                $req = $bdd->prepare('INSERT INTO capteur(Nom, Valeur, Id_Piece)VALUES(?,?,?)');
                $req->execute(array($_POST['Nom'], 0, $_POST['Id_Piece']));
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

