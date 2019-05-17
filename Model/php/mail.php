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
             Nom : ' . $name . '<br>
             Mail : ' . $mail . '<br>
             Mot de passe : '. $motdepasse ."<br>
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
?>
