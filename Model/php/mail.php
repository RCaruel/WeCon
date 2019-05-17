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
?>
