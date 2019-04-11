<?php include "Model/php/Graph.php"; ?>
<html>
<head>
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
    <div class = "anc"><a href="#Parametre"><button id = "Parametre">Param&egrave;tre</button></a></div>
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
        <?php showGraphique(123,165,5,61,65,12,132,1,
            "Température","Valeur");?>
    </div>

</div>

<div id = "Gestiondescapteurs">

</div>

<div id = "Gestiondescomptes">

</div>

<div id = "Parametres">

</div>

<script src="Views/js/EspaceClient.js"></script>
</body>
</html>