<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 21/02/2019
 * Time: 10:34
 */

function Send_Message(){
    require "Views/php/SendMsg.php";
}

function Send_Message_Check(){
    require "Views/php/SendMsgVerif.php";
}

function Inscription(){
    require "Views/php/Inscription.php";
}

function Connexiontech(){
    require "Views/php/connexiontech.php";
    include "Views/php/Header.php";
    include "Views/html/footer.html";
}

function Connexionentreprise(){
    require "Views/php/connexionentreprise.php";
    include "Views/html/footer.html";
}

function Connexionclient(){
    require "Views/php/connexionclient.php";
    include "Views/html/footer.html";
}

function Accueil(){
    require "Views/php/Accueil.php";
}

function Espace_Entreprise(){
    require "Views/html/EspaceEntreprise.html";
}

?>