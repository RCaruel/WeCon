<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 21/02/2019
 * Time: 10:34
 */

function Send_Message(){
    include "Views/html/header.html";
    require "Views/html/SendMsg.html";
    include "Views/html/footer.html";
}

function Send_Message_Check(){
    require "Views/php/SendMsgVerif.php";
}

function Inscription(){
    require "Views/html/Inscription.html";
    include "Views/html/header.html";
    include "Model/php/Inscription.php";
    include "Views/html/footer.html";
}

function Connexiontech(){
    require "Views/html/connexiontech.html";
    include "Views/html/header.html";
    include "Model/php/Connexion.php";
    include "Views/html/footer.html";
}

function Connexionentreprise(){
    require "Views/html/connexionentreprise.html";
    include "Views/html/header.html";
    include "Model/php/Connexion.php";
    include "Views/html/footer.html";
}

function Connexionclient(){
    require "Views/html/connexionclient.html";
    include "Views/html/header.html";
    include "Model/php/Connexion.php";
    include "Views/html/footer.html";
}

function Accueil(){
    require "Views/html/Accueil.html";
    include "Views/html/footer.html";
}

function Espace_Entreprise(){
    require "Views/php/EspaceEntreprise.php";
    include "Views/html/footer.html";
}

function About(){
    include "Views/html/header.html";
    require "Views/html/apropos.html";
    include "Views/html/footer.html";
}

function Produit(){
    require "Views/html/Produit.html";
    include "Views/html/header.html";
    include "Views/html/footer.html";
}

?>