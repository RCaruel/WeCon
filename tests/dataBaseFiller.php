<?php
include "../Model/php/_connexionbdd.php";
/**
 * Ajout d'une maison dans la base de donnée
 *
$location = "maison(Carte, Id_User)";
$values = "(?, ?)";
$valuesToInsert = array(1, 12);

$bdd = my_pdo_connexxionWeCon();
$req = $bdd -> prepare("INSERT INTO " . $location . " VALUES " . $values);
$req -> execute($valuesToInsert);
// **/

/**
 * Ajout d'une piece dans la base de donnée
 *
$location = "piece(Temperature, Distance, Id_Maison)";
$values = "(?, ?, ?)";
$valuesToInsert = array(1, 1, 1);

$bdd = my_pdo_connexxionWeCon();
$req = $bdd -> prepare("INSERT INTO " . $location . " VALUES " . $values);
$req -> execute($valuesToInsert);
// **/


/**
 * Ajout d'un capteur dans la base de donnée
 **/
$location = "capteur(type, Nom, Valeur, jour, Id_Piece)";
$values = "(?, ?, ?, ?, ?)";
$dateOfToday = date("Y-m-d", time() - 86400 * 0);
$valuesToInsert = array("luminosite", "Luminosité", random_int(1, 32), $dateOfToday, 1);

$bdd = my_pdo_connexxionWeCon();
$req = $bdd->prepare("INSERT INTO " . $location . " VALUES " . $values);
$req->execute($valuesToInsert);
//**/

/**
 * Ajout d'un nom et prenom pour un utilisateur
 */
