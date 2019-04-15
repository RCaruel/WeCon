<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', '');
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO membres(identifiant, nom, prenom, mail, type_utilisateur)VALUES(?,?,?,?,?)');
$req -> execute(array($_POST['identifiant'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], 'Client'));
?>

