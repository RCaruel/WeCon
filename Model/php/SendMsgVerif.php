<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 21/02/2019
 * Time: 09:59
 */

$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$mail = htmlspecialchars($_POST["mail"]);
$message = htmlspecialchars($_POST["message"]);

include ("Model/php/_connexionbdd.php");
include ("Model/php/mail.php");

try {
    $bdd = my_pdo_connexxionWeCon();
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}


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

    $sendRequest = $bdd -> prepare("INSERT INTO rapport(nom, prenom, mail, message, Id_Membres) VALUES (?, ?, ?, ?, ?)");
    SendMailRequest($nom, $prenom, $mail, $message);
    $sendRequest->execute(array($nom, $prenom, $mail, $message, 0));


}

?>