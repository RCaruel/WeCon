<?php 
try { 
	$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', ''); 
} 
catch(Exception $e) { 
	die('Erreur : '.$e->getMessage()); 
}

if(isset($_POST['forminscription'])) {
   $mail = htmlspecialchars($_POST['mail']);
   $mdp = sha1($_POST['mdp']);
   if(!empty($_POST['mail'])AND !empty($_POST['mdp'])) {
       $reqmail= $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
       $reqmail->execute(array($mail));
       $mailexist = $reqmail->rowCount();
       if($mailexist != 0) {
           $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
           $requser->execute(array($mail, $mdp));
           $userexist = $requser->rowCount();
           if ($userexist != 0) {
               $userinfo = $requser->fetch();
               $_SESSION['id'] = $userinfo['id'];
               $_SESSION['pseudo'] = $userinfo['pseudo'];
               $_SESSION['mail'] = $userinfo['mail'];
               header("Location: profil.php?id=" . $_SESSION['id']);
           } else {
               $erreur = "Mot de passe incorrect";
           }
       }
      else{
        $erreur = "Compte inexistant";
      }
   } 
   else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
echo "S'inscrire ! <a href=\"index.php?action=Inscription\">Inscription</a>";
require "Views/html/connexiontech.html";
?>
