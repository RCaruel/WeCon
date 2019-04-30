<?php
session_start();

echo $_SESSION["id"];
if (isset($_SESSION["id"]) and $_SESSION["id"] > 0) {



?>

//CODE//
<?php
}
else{
    header("Location: index.php?action=Accueil");
}
?>