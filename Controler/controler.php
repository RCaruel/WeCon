<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 21/02/2019
 * Time: 10:34
 */

function Send_Message(){
    require "Views/php/SendMsg.php";
    include "Views/html/footer.html";
    include "Views/html/header.html";
}

function Send_Message_Check(){
    require "Views/php/SendMsgVerif.php";
}

function Inscription(){
    require "Views/html/Inscription.html";
    include "Views/html/footer.html";
    include "Views/html/header.html";
    include "Model/php/Inscription.php";
}

function Connexiontech(){
    require "Views/php/connexiontech.html";
    include "Views/html/header.html";
    include "Views/html/footer.html";
    include "Model/php/Connexion.php";
}

function Connexionentreprise(){
    require "Views/php/connexionentreprise.html";
    include "Views/html/header.html";
    include "Views/html/footer.html";
    include "Model/php/Connexion.php";
}

function Connexionclient(){
    require "Views/html/connexionclient.html";
    include "Views/html/header.html";
    include "Views/html/footer.html";
    include "Model/php/Connexion.php";
}

function Accueil(){
    require "Views/html/Accueil.html";
    include "Views/html/footer.html";
}

function Espace_Entreprise(){
    require "Views/html/EspaceEntreprise.html";
    include "tests/TestGraph.php";
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