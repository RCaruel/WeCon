<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 24/05/2019
 * Time: 15:00
 */

function genSelectPiece(){
    include "Model/php/_connexionbdd.php";
    $bdd = my_pdo_connexxionWeCon();
    $req = $bdd -> prepare("SELECT piece.Nom, piece.Id 
                                                FROM piece
                                                INNER JOIN maison
                                                    ON piece.Id_Maison = maison.Id
                                                INNER JOIN membres 
                                                    ON maison.Id_Membres = membres.id
                                                WHERE membres.id = ?");
    $req -> execute(array($_SESSION['id']));
    $rows = $req->fetchAll();
    foreach ($rows as $row) {
        echo "<option value=".$row["Id"].">".$row['Nom']."</option>";
    }
}