<?php

include ('Model/php/_connexionbdd.php');

function getIdMaison(){
    $bdd = my_pdo_connexxionWeCon();
    $req = $bdd -> prepare("SELECT maison.Id FROM maison
                                        INNER JOIN membres ON membres.Id = maison.Id_Membres
                                        WHERE membres.Id = ?");
    $req -> execute(array($_SESSION['id']));
    return $req->fetchAll()[0]['Id'];
}

function verif()
{
    try {
        if (!empty($_POST['Nom'] AND $_POST['Surface'])) {
            function existeIdentifiant($identifiant)
            {
                $bdd = my_pdo_connexxionWeCon();
                $reqpseudo = $bdd->prepare("SELECT * FROM piece WHERE Nom = ?");
                $reqpseudo->execute(array($identifiant));
                $pseudoexist = $reqpseudo->rowCount();
                return ($pseudoexist > 0);
            }

            if (existeIdentifiant($_POST['Nom'])) {
                echo 'Identifiant déjà utilisé';
                return (FALSE);
            } else {
                $bdd = my_pdo_connexxionWeCon();
                $req = $bdd->prepare('INSERT INTO piece(Temperature, Id_Maison, Surface, Nom)VALUES(?,?,?,?)');
                $req->execute(array(20, getIdMaison(), $_POST['Surface'], $_POST['Nom']));
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

