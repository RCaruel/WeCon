<?php
session_start(); 
include "Model/php/Graph.php";

if (isset($_SESSION["id"]) and $_SESSION["id"] > 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WeCon</title>
    <link rel="stylesheet" href="css/EspaceEntreprise.css">
    <link rel="stylesheet" href="Views/css/EspaceEntreprise.css">
</head>
<body>
<nav>
    <a href="index.php?action=Accueil"><img src="Ressources/logoBluebg.PNG"></a>
    <div class = "anc"><a href="#Statistiques générales"><button id = "StatsGen">Statistiques générales</button></a></div>
    <div class = "line"></div>
    <div class = "anc"><a href="#Statistiques de panne"><button id = "StatsPanne">Statistiques de panne</button></a></div>
    <div class = "line"></div>
</nav>
<a id="Statistiques générales" ></a>
<div class = "navigation">Satistiques Générales :
    <div id = "Graph_nb_clients"><?php showGraphique(123,165,5,61,65,12,132,1,
            "Nombre_de_Clients","Valeur");?></div>
    <div id = "Graph_nb_ventes"><?php showGraphique(5,5,5,5,5,5,5,2,
            "Nombre_de_Ventes", "Valeur");?></div>
    <div id = "Graph_nb_pannes"><?php showGraphique(5,10,15,20,25,30,35,3,
            "Nombre_de_Pannes", "Valeur");?></div>
    <div id = "Graph_nb_message"><?php showGraphique(35,30,25,20,15,10,5,4,
            "Nombre_de_Messages", "Valeur");?></div>
</div>
<a id="Statistiques de panne" ></a>
<div class = "navigation" id = "statsPanne">
    <?php include "Views/html/Inscription.html"?>
</div>



</body>
</html>
<?php
}
else{
    header("Location: index.php?action=Accueil");
}
?>