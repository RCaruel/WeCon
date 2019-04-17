<?php include "Model/php/Graph.php"; ?>
<html>
<head>
    <link rel="icon" href="Ressources/wC.png" />
    <meta charset="utf-8">
    <title>WeCon</title>
    <link rel="stylesheet"  href="Views/css/EspaceClient.css">
</head>

<body>

<nav>
    <a href="index.php?action=Accueil"><img src="Ressources/logoBluebg.PNG"></a>
    <div class = "anc"><a href="#Tableaudebord"><button id = "TabBord">Tableau de bord</button></a></div>
    <div class = "line"></div>
    <div class = "anc"><a href="#Gestiondescapteurs"><button id = "GestCapt">Gestion des capteurs</button></a></div>
    <div class = "line"></div>
    <div class = "anc"><a href="#Gestiondescomptes"><button id = "GestComptes">Gestion des comptes</button></a></div>
    <div class = "line"></div>
    <div class = "anc"><a href="#Parametres"><button id = "Parametre">Param&egrave;tre</button></a></div>
    <div class = "line"></div>

</nav>

<div id = "Tableaudebord">
    <div id = "DesignMaison">
        <img src="Ressources/DesignMaison.png">
    </div>

    <div id = "Luminosité">
        <?php showGraphique(123,165,5,61,65,12,132,1,
            "Luminosité","Valeur");?>
    </div>

    <div id = "Temperature">
        <?php showGraphique(123,165,5,61,65,12,132,2,
            "Température","Valeur");?>
    </div>

</div>

<div id = "Gestiondescapteurs">
    <h3>Gestion des capteurs</h3>
    <button class = "bouton" id = "AddCapteur">Ajouter un capteur</button>
    <button class = "bouton" id = "AddPiece">Ajouter une piece</button>

</div>

<div id = "Gestiondescomptes">
    <h3>Gestion des comptes</h3>
    <button class = "bouton" id = "AddPiece">Ajouter un utilisateur</button>
</div>

<div id = "Parametres">
    <h3>Param&egrave;tres</h3>
    <div id = "BoiteParametres">
        <h2>Param&egrave;tres generaux</h2>
<div>
  <input type="checkbox" id="horns" name="horns">
  <label for="horns">Synchronisation auto</label>
</div>
<div>
  <input type="checkbox" id="horn" name="horn">
  <label for="horn">Envoyer relev&eacute; par email</label>
</div>
<div>
  <input type="checkbox" id="hor" name="hor">
  <label for="hor">Acc&egrave;s restreint utilisateurs</label>
</div>
</div>
    <div id = "BoiteParametres2">
        <h2>S&eacute;curit&eacute;</h2>
<div>
  <input type="checkbox" id="ho" name="ho">
  <label for="ho">Retenir mot de passe pour futurs connexions</label>
</div>
<div>
  <input type="checkbox" id="hors" name="hors">
  <label for="hors">Retenir historique</label>
</div>
<div>
  <input type="checkbox" id="hornss" name="hornss">
  <label for="hornss">Nettoyer historique &agrave; chaque connexion</label>
</div>
<div>
  <input type="checkbox" id="hosrns" name="hosrns">
  <label for="hosrns">Autoriser le partage des données</label>
</div>
</div>
</div>

<script src="Views/js/EspaceClient.js"></script>
</body>
</html>