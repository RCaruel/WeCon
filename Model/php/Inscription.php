<?php 
try { 
	$bdd = new PDO('mysql:host=localhost;dbname=wecon', 'root', '');
} 
catch(Exception $e) { 
	die('Erreur : '.$e->getMessage()); 
}
if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
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