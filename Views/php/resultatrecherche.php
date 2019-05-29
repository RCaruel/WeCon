<?php
try
{
    $bdd = new PDO("mysql:host=localhost;dbname=wecon", "root", "");
    $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}


catch(Exception $e)
{
    die("Une erreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_POST["s"]) AND $_POST["s"] == "Rechercher"){
    $_POST["terme"] = htmlspecialchars($_POST["terme"]); //pour sécuriser le formulaire contre les failles html
    $terme = $_POST["terme"];
    $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
    $terme = strip_tags($terme); //pour supprimer les balises html dans la requête
}

if (isset($terme))
{
    $terme = strtolower($terme);
    $select_terme = $bdd->prepare("SELECT question, reponse FROM questionsrep WHERE reponse LIKE ? OR question LIKE ?");
    $select_terme->execute(array("%".$terme."%", "%".$terme."%"));
}
else
{
    $message = "Vous devez entrer votre requete dans la barre de recherche";
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Les résultats de votre recherche</title>
    <link rel="stylesheet" type="text/css" href="Views/css/resultatrecherche.css">
</head>
<body>

<a href="index.php?action=FAQ"><input class = "boutonRetour" type = "submit" name = "s" value = "<- Retour" ></a>

<div class="hit-the-floor">RÉSULTATS DE VOTRE RECHERCHE</div>

<div class = "Resultats">
    <?php
    while($terme_trouve = $select_terme->fetch())
    {
        echo '<div><h2 class = "question">'.utf8_encode($terme_trouve['question']).'</h2><p class = "reponse"> '.utf8_encode($terme_trouve['reponse']).'</p>';
    }
    $select_terme->closeCursor();
    ?>
</div>




</body>
</html>


