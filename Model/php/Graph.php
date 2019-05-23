<?php
/**
* Created by PhpStorm.
* User: Rémi
* Date: 28/03/2019
* Time: 09:01
*/
//On récupère ici les valeurs pour la graphique
//modifier et adapter pour des valeurs en SQL.
function showGraphique($value6, $value5, $value4, $value3, $value2, $value1, $value, $nbGraph, $nomGraph, $nomAxe){
//On charge l'affichage du graphique
    include "Views/html/graphique.html";
    echo '<html>
        <!--  Moyen pour transmettre la valeur du graphique!-->
        <input type = "hidden" class="valuej6" value = ' . $value6 . '>
        <input type = "hidden" class="valuej5" value = ' . $value5 . '>
        <input type = "hidden" class="valuej4" value = ' . $value4 . '>
        <input type = "hidden" class="valuej3" value = ' . $value3 . '>
        <input type = "hidden" class="valuej2" value = ' . $value2 . '>
        <input type = "hidden" class="valuej1" value = ' . $value1 . '>
        <input type = "hidden" class="valuej" value = ' . $value . '>
        <input type = "hidden" class="nbGraph" value = ' . $nbGraph . '>
        <input type = "hidden" class="nomGraph" value = ' . $nomGraph . '>
        <input type = "hidden" class="nomAxe" value = ' . $nomAxe . '>
        <script src="Views/js/Graph.js"></script>
    </html>';
}

function setGraphique($value, $nbGraph, $nomGraph, $nomAxe){
    include "Model/php/_connexionbdd.php";
    $bdd = my_pdo_connexxionWeCon();
    $array = [0,0,0,0,0,0,0];

    for ($i = 0; $i < 7; $i++){
        $date = date("Y-m-d", time() - 86400*$i);
        $req = $bdd->prepare("SELECT * FROM globaldata WHERE jour = ?");
        $req->execute(array($date));
        $nbrow = $req->rowCount();
        if ($nbrow > 0){
            $array[$i] = $req->fetchAll()[0]["$value"];
        }else{
            $array[$i] = 0;
        }
        if ($value == "nbMessages"){
            $array[$i] *= 5;
        }
    }
    showGraphique($array[6], $array[5], $array[4], $array[3], $array[2], $array[1], $array[0], $nbGraph, $nomGraph, $nomAxe);
}

function setGraphiqueEspClient($value, $nbGraph, $nomGraph, $nomAxe){
    include "Model/php/_connexionbdd.php";
    $bdd = my_pdo_connexxionWeCon();
    $array = [0,0,0,0,0,0,0];

    for ($i = 0; $i < 7; $i++){
        $date = date("Y-m-d", time() - 86400*$i);
        $req = $bdd->prepare("SELECT capteur.Valeur 
                                                FROM capteur
                                                INNER JOIN piece
                                                    ON capteur.Id_Piece = piece.Id
                                                INNER JOIN maison
                                                    ON piece.Id_Maison = maison.Id
                                                INNER JOIN membres 
                                                    ON maison.Id_User = membres.id
                                                WHERE jour = ? AND membres.id = ? AND type = ?");
        $req->execute(array($date, $_SESSION["id"], $value));
        $nbrow = $req->rowCount();
        if ($nbrow > 0){
            $array[$i] = $req->fetchAll()[0]["Valeur"] * 5;
        }else{
            $array[$i] = 0;
        }
    }
    showGraphique($array[6], $array[5], $array[4], $array[3], $array[2], $array[1], $array[0], $nbGraph, $nomGraph, $nomAxe);
}
