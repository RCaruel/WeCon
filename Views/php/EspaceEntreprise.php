<meta http-equiv="refresh" content="300;URL=index.php?action=deco">
<?php

include "Model/php/Graph.php";

if (isset($_SESSION["id"]) and $_SESSION["id"] > 0 and ($_SESSION["type"] == 'Entreprise')) {
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
            <br>
            <div class=pseudo>
                <?php echo $_SESSION['nom'] . " " . $_SESSION['prenom']; ?>
                <?php echo "<p style='color:red;'>" . $_SESSION["type"] . "</p>"; ?>
            </div>
            <div class="anc"><a href="#Statistiques générales"><button id="StatsGen">Statistiques générales</button></a></div>
            <div class="line"></div>
            <div class="anc"><a href="#Inscription"><button id="Inscript">Inscription</button></a></div>
            <div class="line"></div>
            <div class="anc"><a href="index.php?action=deco"><button class="bouton" id="Parametre">Deconnexion</button></a></div>
            <div class="line"></div>
        </nav>
        <a id="Statistiques générales"></a>
        <div class="navigation">Statistiques Générales :
            <div id="Graph_nb_clients"><?php setGraphique(
                                            "nbClients",
                                            1,
                                            "Nombre_de_Clients",
                                            "Valeur"
                                        ); ?></div>
            <div id="Graph_nb_ventes"><?php setGraphique(
                                            "nbVentes",
                                            2,
                                            "Nombre_de_Ventes",
                                            "Valeur"
                                        ); ?></div>
            <div id="Graph_nb_pannes"><?php setGraphique(
                                            "nbPannes",
                                            3,
                                            "Nombre_de_Pannes",
                                            "Valeur"
                                        ); ?></div>
            <div id="Graph_nb_message"><?php setGraphique(
                                            "nbMessages",
                                            4,
                                            "Nombre_de_Messages",
                                            "Valeur"
                                        ); ?></div>
        </div>

        <div class="navigation Inscript" id="Inscription">
            <h4>Inscription</h4>
            <?php include "Views/html/Inscription.html" ?>
        </div>
    </body>
    <script src="Views/js/EspaceEntreprise.js"></script>

    </html>
<?php
} elseif (isset($_SESSION["id"]) and ($_SESSION["id"] > 0) and ($_SESSION["type"] != 'Entreprise')) {
    header("Location: index.php?action=Espace_" . $_SESSION['type']);
} else {
    header("Location: index.php?action=Accueil");
}
?>