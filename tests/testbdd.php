<?php
/**
 * Created by PhpStorm.
 * User: antoi
 * Date: 06/05/2019
 * Time: 15:39
 */

include ('Model/php/_connexionbdd.php');


try {
    $bdd = my_pdo_connexxionWeCon();
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}


?>
