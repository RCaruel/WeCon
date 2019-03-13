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

try {
    $bdd = new PDO('mysql:host=localhost;dbname=request', 'root', '');
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

    $sendRequest = $bdd -> prepare("INSERT INTO sendrequest(id, nom, prenom, mail, message) VALUES (?, ?, ?, ?, ?)");
    $sendRequest->execute(array(NULL, $nom, $prenom, $mail, $message));
    mail($mail, "Confirmation d'envoi de message", "Bonjour, \nVotre Message a bien été envoyé et est en train d'être analysé par nos experts");
    echo "Le message a bien été envoyé";

}

?>