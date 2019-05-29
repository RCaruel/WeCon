<?php
include ("Model/php/_connexionbdd.php");

function ajoutmessage()
{
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $mail = $_SESSION['mail'];
    $message = $_POST['messageps'] ;
    $Id_Personne = $_SESSION['id'];
    $bdd = my_pdo_connexxionWeCon();
    $sendTech = $bdd->prepare("INSERT INTO rapport(nom, prenom, mail, message, Id_Membres) VALUES (?, ?, ?, ?, ?)");
    $sendTech->execute(array($nom, $prenom, $mail, $message, $Id_Personne));
}

