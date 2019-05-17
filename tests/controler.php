<?php
session_start();
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
    require "Model/php/SendMsgVerif.php";
    header("Location: index.php?action=Contact");
}

function Inscription(){
    require "Views/html/Inscription.html";
}

function ConnexionTechnicien(){
    if (!isset($_SESSION["id"])) {
        include "Views/html/header.html";
        include "Views/html/footer.html";
        require "Views/html/connexiontech.html";
    }else{
        header("Location: index.php?action=Espace_" . $_SESSION['type']);
    }
}

function ConnexionEntreprise(){
    if (!isset($_SESSION["id"])) {
        include "Views/html/header.html";
        include "Views/html/footer.html";
        require "Views/html/connexionentreprise.html";
    }else{
        header("Location: index.php?action=Espace_" . $_SESSION['type']);
    }
}

function ConnexionClient(){
    if (!isset($_SESSION["id"])) {
        include "Views/html/header.html";
        include "Views/html/footer.html";
        require "Views/html/connexionclient.html";
    }else{
        header("Location: index.php?action=Espace_" . $_SESSION['type']);
    }
}
function Connexion(){
    if (!isset($_SESSION["id"])) {
        include "Views/html/header.html";
        include "Views/html/footer.html";
        require "Views/html/connexionclient.html";
    }else{
        header("Location: index.php?action=Espace_" . $_SESSION['type']);
    }
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

function Espace_Technicien(){
    require "Views/php/EspaceTech.php";
}

function Send_User(){
    require "Model/php/Espace" . $_GET['page'] . "_post.php";
    include "Views/php/Espace" . $_GET['page'] .".php";
}

function Send_Capteur(){
    require "Model/php/Capteur_post.php";
    include "Views/php/EspaceClient.php";
}

function Send_Piece(){
    require "Model/php/Piece_post.php";
    include "Views/php/EspaceClient.php";
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
function ML(){
    require "Views/html/ml.html";
}
function CU(){
    require "Views/html/CGU.html";
}

function delete(){
    require "Model/php/suppmodif.php";
    supprimer($_GET['ID']);
    include "Views/php/Espace". $_GET['page'] .".php";
}

function editCompte(){
    require "Views/php/Espace" . $_GET['page'] . ".php";
    include "Model/php/suppmodif.php";
    modifier($_GET['ID']);
}

function deleteCapteur(){
    require "Model/php/supprModifCapteur.php";
    supprimer($_GET['ID']);
    include "Views/php/EspaceClient.php";
}

function editCapteur(){
    require "Views/php/EspaceClient.php";
    include "Model/php/supprModifCapteur.php";
    modifier($_GET['ID']);
}

function deco(){
    session_unset();
    session_destroy();
    header("Location: index.php");
}

function modifmdp(){
    include ('Model/php/_connexionbdd.php');
    $mdp = $_POST['newpassword'];
    $mdpc = sha1($mdp);

    $usermail = $_SESSION['mail'];
    $bdd = my_pdo_connexxionWeCon();
    $req = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
    $req -> execute(array($usermail));
    $req = $req -> fetch();
    $iduser = $_SESSION["id"];

    $request = $bdd->prepare("UPDATE membres SET motdepasse= ?  WHERE id = $iduser");
    $request -> execute(array($mdpc));
    echo 'Vous avez modifier voitre mdp';
    header('Location=index.php?action=EspaceClient');


}

function modifmail(){
    include ('Model/php/_connexionbdd.php');
    $iduser = $_SESSION['id'];
    $bdd = my_pdo_connexxionWeCon();
    $req = $bdd -> prepare("SELECT * FROM membres WHERE id = ?");
    $req -> execute(array($iduser));
    $req = $req -> fetch();

    $request = $bdd->prepare("UPDATE membres SET mail= ? WHERE id = $iduser");
    $request -> execute(array($_POST['newmail']));

}
?>


