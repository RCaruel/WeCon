<?php
function SendMailInscription($name, $mail, $motdepasse){

//=====Définition du sujet.
    $sujet = "Création de votre compte monsieur ". $name.".";
//=========

//=====Création du header de l'e-mail.
    $header = "MIME-Version: 1.0\r\n";
    $header.= "From: WeCon.com<remi.caruel@gmail.com>"."\n";
    $header.= "Content-Type:text/html; charset = 'utf-8'"."\n";
    $header.= "Content-Transfert-Encoding : 8bit";

    $message = '
    <html>
        <body>
            <div align="center" style="text-decoration: underline;">
                <h3>Bonjour monsieur ' . $name.'</h3>
            </div>
            <p align="justify">Nous vous remercions de faire confiance à notre compagnie.<br>
            Voici vos identifiants :<br>
            <span style=\'font-weight: bold\'> Nom : </span>' . $name . '<br>
            <span style=\'font-weight: bold\'> Mail : </span>' . $mail . '<br>
            <span style=\'font-weight: bold\'> Mot de passe : </span>'. $motdepasse ."<br>
            Vous pouvez dès maintenant vous connecter à votre espace.<br><br>
            </p>
            <p>Cordialement<br>WeCon</p>
            <h6><br><br><br>Nous vous rappelons que ce mail a été envoyé automatiquement, si vous n'avez pas demandé la création d'un compte dans notre entreprise,
            merci de contacter le support sur le site WeCon.com</h6>
        </body>
    </html>
    ";

    mail($mail,$sujet,$message, $header);

}

function SendMailRequest($nom, $prenom, $mail, $message){

//=====Définition du sujet.
    $sujet = "Vous nous avez contacté Monsieur ". $nom.".";
//=========

//=====Création du header de l'e-mail.
    $header = "MIME-Version: 1.0\r\n";
    $header.= "From: WeCon.com<remi.caruel@gmail.com>"."\n";
    $header.= "Content-Type:text/html; charset = 'utf-8'"."\n";
    $header.= "Content-Transfert-Encoding : 8bit";

    $message = '
    <html>
        <body>
            <div align="center" style="text-decoration: underline;">
                <h3>Bonjour monsieur ' .$prenom . " " . $nom."</h3>
            </div>
            <p align='justify'>Nous avons bien reçu votre message et nous vous recontacterons dès que possible.<br>
                <br>
                Voici vos informations :<br>
                <span style='font-weight: bold'> Nom :</span> " . $nom . " <br>
                <span style='font-weight: bold'> Prenom :</span> " . $prenom . "<br>
                <span style='font-weight: bold'> Mail :</span> " . $mail . "<br>
                <span style='font-weight: bold'> Message :</span> " .$message. "<br>
                <br>
                Merci de ne pas renvoyer de mails et d'attendre notre retour afin de ne pas ralentir le traitement de votre demande.
            <br><br>
            </p>
            <p>Cordialement<br>WeCon</p>
            <h6><br><br><br>Nous vous rappelons que ce mail a été envoyé automatiquement, si vous n'êtes pas à l'origine de ce message,
            merci de contacter le support sur le site WeCon.com</h6>
        </body>
    </html>
    ";

    mail($mail,$sujet,$message, $header);
}

function SendMailTechnicien(){

    //=====Définition du sujet.
        $sujet = "Message d'erreur client ". $_SESSION['pseudo']." ". "iduser =".  $_SESSION['id'];
    //=====Addresse mail du technicien
        $mail = "dofen59@gmail.com";
    //=====Date de l'envoi et message à envoyer.
        $date = date("d-m-Y");
        $heure = date("H:i");
        $messageps = htmlspecialchars($_POST["messageps"]);
    //=====Création du header de l'e-mail.
        $header = "MIME-Version: 1.0\r\n";
        $header.= "From: WeCon.com<hichamtamarin1@gmail.com>"."\n";
        $header.= "Content-Type:text/html; charset = 'utf-8'"."\n";
        $header.= "Content-Transfert-Encoding : 8bit";
    
  //      $message = '
    //    <html>
  //          <body>
   //             <div align="center" style="text-decoration: underline;">
   //                 <h3>Message envoyé le '.$date.' à '.$heure.' par l\'utilisateur '.$_SESSION['pseudo'].'</h3>
   //             </div>
   //             <lr>
   //             <p align="justify">
  //              <span> Message :</span> '.$messageps.'
  //              </p>
  //          </body>
 //       </html>
  //      ';
  $message = '
  <html>
      <body>
          <div align="center" style="text-decoration: underline;">
              <h3>Message envoyé le '.$date." à ".$heure.' par l\'utilisateur '.$_SESSION['pseudo']."</h3>
          </div>
          <p align='justify'>Voici les informations concernant le message d'erreur.<br>
              <br>
              Voici vos informations :<br>
              <span style='font-weight: bold'> Pseudo :</span> " . $_SESSION['pseudo'] . " <br>
              <span style='font-weight: bold'> Mail :</span> " . $_SESSION['mail'] . "<br>
              <span style='font-weight: bold'> Message :</span> " .$messageps. "<br>
              <br>
              Merci de répondre au plus vite à l'adresse email du client.
          <br><br>
          </p>
          <p>Cordialement<br>WeCon</p>
          <h6><br><br><br>Nous vous rappelons que ce mail a été envoyé automatiquement, si ce message ne vous concerne pas,
          merci de contacter le support sur le site WeCon.com</h6>
      </body>
  </html>
  ";
    
        mail($mail,$sujet,$message, $header);
    
    }
