<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 20/05/2019
 * Time: 15:59
 */

function editMdp(){
    include ('Model/php/_connexionbdd.php');
    $mdp = $_POST['newpassword'];
    $mdpc = sha1($mdp);

    $bdd = my_pdo_connexxionWeCon();
    $iduser = $_SESSION["id"];

    $request = $bdd->prepare("UPDATE membres SET motdepasse= ?  WHERE id = $iduser");
    $request -> execute(array($mdpc));
    echo 'Vous avez modifier voitre mdp';
    ?>
    <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
    <?php
}

function editMail(){
    include ('Model/php/_connexionbdd.php');
    $iduser = $_SESSION['id'];
    $bdd = my_pdo_connexxionWeCon();

    $request = $bdd->prepare("UPDATE membres SET mail= ? WHERE id = $iduser");
    $request -> execute(array($_POST['newmail']));
    ?>
    <meta http-equiv="refresh" content="1; url=<?php echo $_SERVER["HTTP_REFERER"]  ; ?>" />
    <?php
}