<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: /wecon/index.php?action=Accueil");
?>