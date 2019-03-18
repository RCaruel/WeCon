<?php 
try { 
	$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', ''); 
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
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 20) {
		$reqpseudo= $bdd->prepare("SELECT * FROM membres WHERE pseudo = ?");
               $reqpseudo->execute(array($pseudo));
               $pseudoexist = $reqpseudo->rowCount();
               if($pseudoexist == 0) {

        		 if($mail == $mail2) {
          		  if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            	   $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
            	   $reqmail->execute(array($mail));
            	   $mailexist = $reqmail->rowCount();
            	   if($mailexist == 0) {
             	     if($mdp == $mdp2) {    	     	
             	        $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
            	         $insertmbr->execute(array($pseudo, $mail, $mdp));
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
}
echo ">Connexion</a>";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>weCon Inscription</title>
    <link rel="stylesheet" href=".../css/inscription.css">
    <link rel="stylesheet" type="text/css" href=".../css/styleHeader.css">

</head>
   <body>
   <div class="background">
        <header>
          <span class="titre"><a href=""><img src="Logo.PNG" width="130"/></a></span>
        <ul>
            <li class="element"><a href="tableaux.php">Accueil</a></li>
            <li class="element"><a href="boucles.php">Produits</a></li>
            <li class="element active"><a href="APropos.html">À propos</a></li>
            <li class="element"><a href="test.php">Contact</a></li>
            <li class="element"><a href="test.php">Connexion</a></li>
        </ul>

    </header>
          </div>
         <br>
          <br>
         <br /><br />
         <div class="formulaire">
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="pseudo">Pseudo :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail2">Confirmation du mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                  </td>
               </tr>
               <tr>
                <td align="right">
                <label for="utilise">Selectionner le type : </label>
                </td>
                <td>
                  <select name="utilise" id="utilise" >
                  <option value="Technicien"> technicien</option>
                  <option value="Entreprise"> entreprise</option>
                  <option value="Client"> client</option>
                  </select>
                 </td>
     </tr>
                  <td></td>
                  <td>
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
       </div>
   </body>
</html>
