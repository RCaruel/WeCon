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
}

function Connexiontech(){
    include "Views/html/header.html";
    include "Views/html/footer.html";
    require "Views/html/connexiontech.html";

}

function Connexionentreprise(){
    include "Views/html/header.html";
    include "Views/html/footer.html";
    require "Views/html/connexionentreprise.html";
}

function Connexionclient(){
    include "Views/html/header.html";
    include "Views/html/footer.html";
    require "Views/html/connexionclient.html";
}

function VerifConnexion(){
    include "Model/php/Connexion.php";
}

function Accueil(){
    require "Views/html/Accueil.html";
    include "Views/html/footer.html";
}

function Espace_Entreprise(){
    require "Views/php/EspaceEntreprise.php";
}

function Espace_Client(){
    require "Views/php/EspaceClient.php";
}

function Espace_Tech(){
    require "Views/php/EspaceTech.php";
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

function Send_Inscription(){
    require "Model/php/Inscription.php";
    require "Views/html/Inscription.html";
}

?>