<?php
include "Model/php/mail.php";
include "Model/php/log.php";
try { 
	$bdd = new PDO('mysql:host=localhost;dbname=wecon', 'root', '');
} 
catch(Exception $e) { 
	die('Erreur : '.$e->getMessage()); 
}
if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $nom = htmlspecialchars($_POST['nom']);
   $prenom = htmlspecialchars($_POST['prenom']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $motdepasse = $_POST['mdp'];
   $mdp = sha1($motdepasse);
   $mdp2 = sha1($_POST['mdp2']);
   $utilise = htmlspecialchars($_POST['utilise']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 20) {
		$reqpseudo= $bdd->prepare("SELECT * FROM membres WHERE (pseudo = ? AND TypeCompte = ?)");
               $reqpseudo->execute(array($pseudo,$utilise));
               $pseudoexist = $reqpseudo->rowCount();
               if($pseudoexist == 0) {

        		 if($mail == $mail2) {
          		  if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            	   $reqmail = $bdd->prepare("SELECT * FROM membres WHERE(mail = ? AND TypeCompte = ?)");
            	   $reqmail->execute(array($mail,$utilise));
            	   $mailexist = $reqmail->rowCount();
            	   if($mailexist == 0) {
             	     if($mdp == $mdp2) {    	     	
             	        $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse, TypeCompte) VALUES(?, ?, ?, ?)");
                        $insertmbr->execute(array($pseudo, $mail, $mdp, $utilise));
                        $iduser= $bdd->prepare('SELECT MAX(id) FROM membres AS idmax');
                        $iduser->execute();
                        $id=$iduser->fetchColumn(0);
                        $insertnom = $bdd->prepare("INSERT INTO nommembres(id_Membres, nom, prenom) VALUES(?, ?, ?)");
            	         $insertnom->execute(array($id, $nom, $prenom));
            	         SendMailInscription($pseudo,$mail,$motdepasse);
                        sendLog("Création du compte de " . $pseudo . " mail : " . $mail . " mot de passe : " . $motdepasse);
                        if ($utilise=="Client"){
                        
                        $insertmaison = $bdd->prepare("INSERT INTO maison(Carte, Id_Membres) VALUES(?, ?)");
                        $insertmaison->execute(array(1, $id));
                     }
           	          $erreur = ">Me connecter</a>";
           	      
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
     }
     else {
     	$erreur = "Pseudo déjà utilisé";
     }
      } 
      else {
         $erreur = "Votre pseudo ne doit pas dépasser 20 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
   echo $erreur;
}

?>