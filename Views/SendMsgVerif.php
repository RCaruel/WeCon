<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 21/02/2019
 * Time: 09:59
 */

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$message = $_POST["message"];


// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($nom) AND isset($prenom) AND isset($mail) AND isset($message)) {

    if (isset($_FILES['file']) AND $_FILES['file']['error'] == 0) {

        $infosfichier = pathinfo($_FILES['file']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

        if (in_array($extension_upload, $extensions_autorisees)) {

            echo "Le fichier est bon et a bien été reçu.\n";

        }

    }

    echo "Le message a bien été envoyé";

}

?>