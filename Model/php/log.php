<?php
include "Model/php/_connexionbdd.php";

function sendLog($message){
    $bddLog = my_pdo_connexxionWeCon();
    $insertLog = $bddLog->prepare("INSERT INTO log(message) VALUES(?)");
    $insertLog->execute(array(date("Y-m-d H:i:s || ", time() + 7200) . $message));
}

?>