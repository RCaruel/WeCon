<meta http-equiv="refresh" content="300;URL=index.php?action=deco"> 
<?php

include('Model/php/tableusertech.php');
include 'Model/php/log.php';
include 'Model/php/tablemessagerie.php';

if (isset($_SESSION["id"]) and $_SESSION["id"] > 0 and ($_SESSION["type"] =='Technicien')) {
    ?>
    <html>

    <head>
        <meta charset="utf-8">
        <title>WeCon</title>
        <link rel="stylesheet" href="../css/EspaceTech.css">
        <link rel="stylesheet" href="Views/css/EspaceTech.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="tests/w3.css">

    </head>

    <body>
        <nav>
            <a href="index.php?action=Accueil"><img src="Ressources/logoBluebg.PNG"></a>
            <br>
            <div class = pseudo>
                <?php echo $_SESSION['pseudo']; ?>
                <br>
                <?php echo "<p style='color:red;'>".$_SESSION["type"]."</p>";?>
            </div>
            <div class="anc"><a href="#Gestionusers"><button id="Gestionutilisateur">Gestion des utilisateurs</button></a></div>
            <div class="line"></div>
            <div class="anc"><a href="#Logs"><button id="Logs">Logs</button></a></div>
            <div class="line"></div>
            <div class="anc"><a href="/wecon/views/php/deconnexion.php"><button class="bouton" id="Deco">Deconnexion</button></a></div>
            <div class="line"></div>

        </nav>

        <div class="navigation" style="font-family: Helvetica">
            <h4 style="margin-left: 3%; margin-top: 5px;">Gestion des utilisateurs</h4>

            <button onclick="document.getElementById('id01').style.display='block'" class="w3-button" id="Ajouter"><a>Ajouter un utilisateur</a></button>
            <div id="id01" class="w3-modal">
                <div class="w3-modal-content" style="width: 50%;">
                    <form action="index.php?action=Send_User&page=Tech" method="post">
                        <div class="w3-container">
                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;
                            </span>
                            <div id="head">
                                <p style="margin-left: 3%;">Ajouter client</p>
                                <div id="line"></div>
                            </div>
                            <br>
                            <form action="Model/php/EspaceTech_post.php" method="post">
                                <div class="left">
                                    <label for="nom">Nom:<input id="newnom" type="text" name="nom" /></label><br>
                                    <label for="prenom">Prenom:<input id="newprenom" type="text" name="prenom" /></label><br>
                                </div>
                                <div class="right">
                                    <label for="identifiant">Identifiant:<input id="newid" type="text" name="identifiant" /></label>
                                    <label for="mail">Adresse e-mail:<input id="newmail" type="email" name="mail" /></label><br>
                                </div>
                        </div>
                        <input type="submit" value="Enregistrer" style="margin: 10px;" />
                    </form>
                </div>
            </div>
            <div id="line"></div>

            <div class="utilisateur">
                <p style="display: inline-block; margin-left: 20px; margin-top: 10px;">Rechercher:</p>
                <input id="search" type="text" autocomplete="off" style="width: 20%;">
                <div id="results"></div>


                <button onclick="document.getElementById('id02').style.display='block'" class="w3-button" id="Editer"><a>Editer</a></button>
                <div id="id02" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                            <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;
                            </span>
                            <p style="margin-left: 3%; margin-bottom: 0px;">Editer</p>
                            <div id="lineedit"></div>
                            <?php
                            afftableau(TRUE, 'Tech');
                            ?>

                        </div>
                    </div>
                </div>
                <div class="tableuser">
                    <?php
                    afftableau(FALSE, 'Tech');
                    ?>
                </div>
            </div>
        </div>

        <div class = "log">
            <?php affLog();?>
        </div>


        <div class="message">
            <h4 id="Messagerie">Messagerie</h4>
            <?php
            affmessage();
            ?>
        </div>


        <script src="Views/js/EspaceTech.js"></script>
    </body>

    </html>


    <?php
    //	$data = unserialize(file_get_contents('towns.txt')); // Récupération de la liste complète des villes
    //	$dataLen = count($data);

    //sort($data); // On trie les villes dans l'ordre alphabétique

    //	$results = array(); // Le tableau où seront stockés les résultats de la recherche

    // La boucle ci-dessous parcourt tout le tableau $data, jusqu'à un maximum de 10 résultats

    //	for ($i = 0 ; $i < $dataLen && count($results) < 10 ; $i++) {
    //	    if (stripos($data[$i], $_GET['s']) === 0) { // Si la valeur commence par les mêmes caractères que la recherche

    //	        array_push($results, $data[$i]); // On ajoute alors le résultat à la liste à retourner

    //	    }
    //	}

    //	echo implode('|', $results); // Et on affiche les résultats séparés par une barre verticale |
    ?>
<?php
}elseif (isset($_SESSION["id"]) and ($_SESSION["id"] > 0) and ($_SESSION["type"] !='Technicien')) {
    header("Location: index.php?action=Espace_" . $_SESSION['type']);
}
 else {
    header("Location: index.php?action=Accueil");
}
?>