<?php
echo "<p style='color:red;'>" . $_SESSION["type"] . "</p>";
if (isset($_SESSION["id"]) and ($_SESSION["id"] > 0) and ($_SESSION["type"] == 'Client')) {
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
    </head>

    <body>

    <nav>
        <a href="index.php?action=Accueil"><img src="Ressources/logoBluebg.PNG"></a>
        <br>
        <div class = pseudo>
            <?php echo $_SESSION['pseudo']; ?>
        </div>
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
        <form method="POST" action="index.php?action=Espace_Client#Parametres">
            <div id="Parametres">
                <h3>Param&egrave;tres</h3>
                <div id="BoiteParametres">
                    <h2>Param&egrave;tres generaux</h2>

                        <input type="checkbox" value="synchro" id="releve"name="parametres[]"/>Synchronisation auto<br>
         
                  
                        <input type="checkbox" value="releve" id="releve" name="parametres[]"/>Envoyer relev&eacute; par email<br>
                         
                    
                        <input type="checkbox" value="acces" id="acces" name="parametres[]"/>Acc&egrave;s restreint utilisateurs<br>
                   
                </div>
                <div id="BoiteParametres2">
                    <h2>S&eacute;curit&eacute;</h2>
                  
                        <input type="checkbox" value="mdp" id="mdp" name="parametres[]"/>Retenir mot de passe pour futurs connexions<br>
                    
                  
                        <input type="checkbox" value="historique" id="historique" name="parametres[]"/>Retenir historique<br>
                   
                   
                        <input type="checkbox" value="clean" id="clean" name="parametres[]"/>Nettoyer historique &agrave; chaque connexion<br>
                    
                    
                        <input type="checkbox" value="partage" id="partage" name="parametres[]"/>Autoriser le partage des données<br>
                    
                </div>
                <input type="submit" id="Valider" name="validation" value="Valider" class="submit" />
                <?php
                foreach ($_POST['parametres'] as $valeur) {
                    echo "La checkbox $valeur a été cochée<br>";
                }
                if(!$_POST['parametres']){
                    echo "Aucune checkbox n'a été cochée";
                 }
                ?>
            </div>
        </form>
            <script src="Views/js/EspaceClient.js"></script>
    </body>

    </html>
<?php
}
if (isset($_SESSION["id"]) and ($_SESSION["id"] > 0) and ($_SESSION["type"] != 'Client')) {
    header("Location: index.php?action=Espace_" . $_SESSION['type']);
} else {
    header("Location: index.php?action=Accueil");
}
include ("Model/php/_connexionbdd.php");


function modifmdp(){

    $usermail = $_SESSION['mail'];
    $bdd = my_pdo_connexxionWeCon();
    $req = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
    $req -> execute(array($usermail));
    $req = $req -> fetch();

    $request = $bdd->prepare("UPDATE membres SET motdepasse WHERE membres.mail = $usermail");
    $request -> execute(array($_POST['newpassword']));


}

function modifmail(){
    $usermail = $_SESSION['mail'];
    $bdd = my_pdo_connexxionWeCon();
    $req = $bdd -> prepare("SELECT * FROM membres WHERE mail = ?");
    $req -> execute(array($usermail));
    $req = $req -> fetch();

    $request = $bdd->prepare("UPDATE membres SET mail WHERE membres.mail = $usermail");
    $request -> execute(array($_POST('newmail')));


}
?>