<?php
/**
 * Created by PhpStorm.
 * User: antoi
 * Date: 07/06/2019
 * Time: 14:42
 */


include ("_connexionbdd.php");
function post($date,$type,$valeur,$nom,$idpiece){
$bdd = my_pdo_connexxionWeCon();
$reqlog = $bdd ->prepare("INSERT INTO capteur(type,nom,valeur,jour,Id_Piece)VALUES(?,?,?,?,?)");
$reqlog ->execute(array($type,$nom,$valeur,$date,$idpiece));
}
