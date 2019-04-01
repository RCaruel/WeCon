
<html>
<head>
    <meta charset="utf_8" />
    <title>weCon</title>
    <link rel="stylesheet" type="text/css" href="Views/css/style.css">
</head>

<body>
<div class = "content">
    <div class="background">
        <nav id="header">
            <a href="index.php?action=Accueil"><img class="image" href="accueil.php" src="Model/ressources/weCon.png"></a>
            <div class="elementHeader">
                <ul class="header">
                    <li class="element"><a href="index.php?action=Accueil">Accueil</a></li>
                    <li class="element"><a href="index.php?action=Produit">Produits</a></li>
                    <li class="element"><a href="index.php?action=Apropos">À propos</a></li>
                    <li class="element"><a href="index.php?action=Contact">Contact</a></li>
                    <li class="element"><a href="index.php?action=Connexiontech">Connexion</a></li>
                        <ul class="submenu">
                            <li><a href="#">Connexion Client</a></li>
                            <li><a href="#">Connexion Entreprise</a></li>
                            <li><a href="#">Connexion Technicien</a></li>
                        </ul>
                </ul>
            </div>
        </nav>
        <h1>Nous vous connectons à votre maison</h1>
        <button class="en-savoir-plus">En savoir plus</button>
    </div>

    <div class="gauche">
        <img class="pic" src="Model/ressources/first.jpg" alt="" width="380" height="280" />
        <div class="textl">
            <p align="justify"><strong>Un accès à vos données simplifié et fluide.</strong>
                Grâce à ce site, vous pouvez accéder aux données de votre maison de n'importe où avec une connexion internet.
                De plus, il vous est possible d'ajouter des personnes tel que d'autres personnes pouvant avoir un accès à vos données.
                Cela vous permet de gérer vos données à distances. Vos données sont bien sûr protégées et seulement accessible par vous et votre entourage.
            </p>
        </div>
        <img class="pic" src="Model/ressources/third.jpg" alt="" width="380" height="280" />
        <div class="textl">
            <p align="justify"><strong>Des techniciens à votre service</strong>
                Les techniciens de WeCon sont à votre service.
                Si vous avez le moindre soucis, la moindre question, nous vous invitons à nous contacter via l'onglet contact.
                On vous répondra dans les plus brefs délais.
            </p>
        </div>
    </div>

    <div class="droite">
        <div class="textr">
            <p align="justify"><strong>Une connexion sécurisée à votre maison à n'importe quel moment o&ugrave; vous le souhaitez. Gr&acirc;ce &agrave; notre site internet et votre espace de connexion vous ne perdez pas vos données. Tout est mis en place pour que vous n'ayez aucune difficulté &agrave; avoir acc&egrave;s &agrave; celle-ci gr&acirc;ce &agrave; notre version mobile.</strong>
            </p>
        </div>
        <img class="pic" src="Model/ressources/second.jpg" alt="" width="380" height="280" />
        <div class="textr">
            <p align="justify"><strong>Une consommation d’électricité réduite grâce à
                    une gestion responsable de vos ressources</strong>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
        </div>
        <img class="pic" src="Model/ressources/fourth.jpg" alt="" width="380" height="280" />
    </div>

</div>
<?php include "Views/html/footer.html"; ?>

</body>
</html>