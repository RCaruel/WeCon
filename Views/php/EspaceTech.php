<?php
require('_connexionbdd.php');
?>

<html>
<head>
    <meta charset="utf-8">
    <title>WeCon</title>
    <link rel="stylesheet"  href="../css/EspaceTech.css">
    <link rel="stylesheet"  href="Views/css/EspaceTech.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="tests/w3.css">

</head>

<body>

<nav>
    <img src="Ressources/LogoBlueBg.PNG">
    <div class = "anc"><a href="#Gestionusers"><button id = "Gestionutilisateur">Gestion des utilisateurs</button></a></div>
    <div class = "line"></div>
    <div class = "anc"><a href="#Logs"><button id = "Logs">Logs</button></a></div>
    <div class = "line"></div>

</nav>

<a id="Gestionusers" ></a>
<div class="navigation"><h4>Gestion des utilisateurs</h4>

    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button" id="Ajouter">Ajouter un utilisateur</button>
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
            <form action="EspaceTech_post.php" method="post">
            <div class="w3-container">
                        <span onclick="document.getElementById('id01').style.display='none'"
                              class="w3-button w3-display-topright">&times;
                        </span>
                <div id="head">
                    Ajouter client
                    <div id="line"></div>
                </div>
                <br>
                <form action="EspaceTech_post.php" method="post">
                <div class="left">
                    <label for="nom">Nom</label>:<input id="newnom" type="text" name="nom"/>
                    <label for="prenom">Prenom</label>:<input id="newprenom" type="text" name="prenom"/>
                    <label for="identifiant">Identifiant</label>:<input id="newid" type="text" name="identifiant"/>
                </div>
                <div class="right">
                    <label for="mail">Adresse e-mail</label>:<input id="newmail" type="text" name="mail"/>
                    <label for="acces">Type d'accès</label>:<input id="newacces" type="text" name="acces"/>
                    <label for="type_utilisateur">Type d'utilisateur</label>:<input id="newtype" type="text" name="type_utilisateur"/>
                </div>
            </div>

            <input type="submit" value="Enregistrer"/>

            </form>
        </div>

    </div>
    <button onclick="document.getElementById('id02').style.display='block'" class="w3-button" id="Gestionacces">Gestion acc&egrave;s</button>
    <div id="id02" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                        <span onclick="document.getElementById('id02').style.display='none'"
                              class="w3-button w3-display-topright">&times;
                        </span>
                <p>Gestion acc&egrave;s</p>
            </div>
        </div>
    </div>

    <div id="line"></div>

    <div class="utilisateur"><p style="margin-left: 10px; margin-right: 15px; display: inline-block;">Nom utilisateur</p>
        <p style="display: inline-block;">Rechercher:</p>
        <input id="search" type="text" autocomplete="off" style="width: 20%">
        <div id="results"></div>

        <button id="Afficher">Afficher page</button>
        <button id="Editer">Editer</button>
        <?php
        $query = "SELECT * FROM membres ORDER BY id ASC";

        try {
        $bdd_select = $bdd->prepare($query);
        $bdd_select->execute();
        $NbreData = $bdd_select->rowCount();	// nombre d'enregistrements (lignes)
        $rowAll = $bdd_select->fetchAll();
        } catch (PDOException $e){ echo 'Erreur SQL : '. $e->getMessage().'<br/>'; die(); }
        // --------------------------------
        // affichage
        if ($NbreData != 0)
        {
        ?>
        <table border="1">
            <thead>
            <tr>
                <th>Identifiant</th>
                <th>Type d'utilisateur</th>
                <th>Type d'accès</th>
            </tr>
            </thead>
            <tbody>
            <?php
            // pour chaque ligne (chaque enregistrement)
            foreach ( $rowAll as $row )
            {
                // DONNEES A AFFICHER dans chaque cellule de la ligne
                ?>
                <tr>
                    <td><?php echo $row['identifiant']; ?></td>
                    <td><?php echo $row['type_utilisateur']; ?></td>
                    <td><?php echo $row['acces']; ?></td>
                </tr>
                <?php
            } // fin foreach
            ?>
            </tbody>
        </table>
        <?php
        } else { ?>
        pas de données à afficher
        <?php
        }
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

