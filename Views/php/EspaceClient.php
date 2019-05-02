<?php
session_start();

if (isset($_SESSION["id"]) and $_SESSION["id"] > 0) {
    include "Model/php/Graph.php";
    include "Model/php/tableusertech.php";
    include "Model/php/tableCapteur.php";
    ?>

    <html>

    <head>
        <link rel="icon" href="Ressources/wC.png" />
        <meta charset="utf-8">
        <title>WeCon</title>
        <link rel="stylesheet" href="Views/css/EspaceClient.css">
        <link rel="stylesheet" href="Views/css/EspaceTech.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="tests/w3.css">
    </head>

    <body>

        <nav>
            <a href="index.php?action=Accueil"><img src="Ressources/logoBluebg.PNG"></a>
            <?php echo $_SESSION['pseudo']; ?>
            <div class="anc"><a href="#Tableaudebord"><button class="bouton" id="TabBord">Tableau de bord</button></a></div>
            <div class="line"></div>
            <div class="anc"><a href="#Gestiondescomptes"><button class="bouton" id="GestComptes">Gestion des comptes</button></a></div>
            <div class="line"></div>
            <div class="anc"><a href="#Gestiondescapteurs"><button class="bouton" id="GestCapt">Gestion des capteurs</button></a></div>
            <div class="line"></div>
            <div class="anc"><a href="#Parametres"><button class="bouton" id="Parametre">Param&egrave;tre</button></a></div>
            <div class="line"></div>
            <div class="anc"><a href="/wecon/views/php/deconnexion.php"><button class="bouton" id="Parametre">Deconnexion</button></a></div>
            <div class="line"></div>

        </nav>

        <div id="Tableaudebord">
            <div id="DesignMaison">
                <img src="Ressources/DesignMaison.png">
            </div>

            <div id="Luminosité">
                <?php showGraphique(
                    123,
                    165,
                    5,
                    61,
                    65,
                    12,
                    132,
                    1,
                    "Luminosité",
                    "Valeur"
                ); ?>
            </div>

            <div id="Temperature">
                <?php showGraphique(
                    123,
                    165,
                    5,
                    61,
                    65,
                    12,
                    132,
                    2,
                    "Température",
                    "Valeur"
                ); ?>
            </div>

        </div>

        <div id="Gestiondescomptes">
            <button onclick="document.getElementById('id01').style.display='block'" class="w3-button" id="Ajouter"><a>Ajouter un utilisateur</a></button>
            <div id="id01" class="w3-modal">
                <div class="w3-modal-content" style="width: 50%;">
                    <form action="index.php?action=Send_User&page=Client" method="post">
                        <div class="w3-container">
                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;
                            </span>
                            <div id="head">
                                <p style="margin-left: 3%;">Ajouter client</p>
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
                            afftableau(TRUE, 'Client');
                            ?>

                        </div>
                    </div>
                </div>
                <div class="tableuser">
                    <?php
                    afftableau(FALSE, 'Client');
                    ?>
                </div>
            </div>
        </div>

        <div id="Gestiondescapteurs">
            <button onclick="document.getElementById('id03').style.display='block'" class="w3-button" id="AjouterCapteur"><a>Ajouter un Capteur</a></button>
            <div id="id03" class="w3-modal">
                <div class="w3-modal-content" style="width: 50%;">
                    <form action="index.php?action=Send_Capteur" method="post">
                        <div class="w3-container">
                            <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright">&times;
                            </span>
                            <div id="head">
                                <p style="margin-left: 3%;">Ajouter un capteur</p>
                            </div>
                            <br>
                            <form action="Model/php/EspaceTech_post.php" method="post">
                                <label for="nom">Nom:<input id="newnomCapteur" type="text" name="Nom" /></label><br>
                                <select name="type" id="type">
                                    <option value="Luminosité">Luminosité</option>
                                    <option value="Température">Température</option>
                                </select>
                                <label for="prenom">Id_Piece:<input id="newId_Piece" type="text" name="Id_Piece" /></label><br>
                        </div>
                        <input type="submit" value="Enregistrer" style="margin: 10px;" />
                    </form>
                </div>
            </div>

            <button onclick="document.getElementById('id05').style.display='block'" class="w3-button" id="Ajouter" id="AjouterPiece" style="transform: translate(-20px, 0)"><a>Ajouter une Piece</a></button>
            <div id="id05" class="w3-modal">
                <div class="w3-modal-content" style="width: 50%;">
                    <form action="index.php?action=Send_Piece" method="post">
                        <div class="w3-container">
                            <span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-display-topright">
                                &times;
                            </span>
                            <div id="head">
                                <p style="margin-left: 3%;">Ajouter une pièce</p>
                            </div>
                            <br>
                            <form action="Model/php/EspaceTech_post.php" method="post">
                                <label for="nom">Nom:<input id="newnom" type="text" name="Nom" /></label><br>
                                <label for="prenom">Surface:<input id="newprenom" type="text" name="Surface" /></label><br>
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


                <button onclick="document.getElementById('id04').style.display='block'" class="w3-button" id="Editer"><a>Editer</a></button>
                <div id="id04" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                            <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-display-topright">&times;
                            </span>
                            <p style="margin-left: 3%; margin-bottom: 0px;">Editer</p>
                            <div id="lineedit"></div>
                            <?php
                            afftableauCapteur(TRUE);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="tableuser">
                    <?php
                    afftableauCapteur(FALSE);
                    ?>
                </div>
            </div>
        </div>

        <div id="Parametres">
            <h3>Param&egrave;tres</h3>
            <div id="BoiteParametres">
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
            <div id="BoiteParametres2">
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
<?php
} else {
    header("Location: index.php?action=Accueil");
}
?>