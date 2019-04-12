<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 21/02/2019
 * Time: 10:33
 */

require "Controler/controler.php";

if (isset($_GET["action"])){
    $action = htmlspecialchars($_GET["action"]);

    switch ($action){
        case "Send_Message_Check":
            Send_Message_Check();
            break;
        case "Contact":
            Send_Message();
            break;
        case "Inscription":
            Inscription();
            break;
        case "Connexiontech":
            Connexiontech();
            break;
        case "Connexionentreprise":
            Connexionentreprise();
            break;
        case "Connexionclient":
            Connexionclient();
            break;
        case "Accueil":
            Accueil();
            break;
        case "Espace_Entreprise":
            Espace_Entreprise();
            break;
        case "Apropos":
            About();
            break;
        case "Produit":
            Produit();
            break;
        case "Espace_Client":
            Espace_Client();
            break;
        case "SendInscription":
            Send_Inscription();
            break;
        case "VerifConnexion":
            VerifConnexion();
            break;
        case "Espace_Technicien":
            Espace_Technicien();
            break;
        case "ML":
            ML();
            break;
        case "CU":
            CU();
            break;
        default:
            echo "Error 404.";
            break;
    }

}else{
    Accueil();
}
?>