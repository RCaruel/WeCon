<?php

function afftableauCapteur ($edit)
{


    require('_connexionbdd.php');
    $query = "SELECT * FROM Capteur ORDER BY Id ASC";

    try {
        $bdd = my_pdo_connexxionWeCon();
        $bdd_select = $bdd->prepare($query);
        $bdd_select->execute();
        $NbreData = $bdd_select->rowCount();    // nombre d'enregistrements (lignes)
        $rowall = $bdd_select->fetchAll();
    } catch (PDOException $e) {
        echo 'Erreur SQL : ' . $e->getMessage() . '<br/>';
        die();
    }
// --------------------------------
// affichage
    if ($NbreData != 0) {
        echo '<html>
    <table border="1">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom du Capteur</th>
            <th>Valeur</th>
        </tr>
        </thead>
        <tbody>';
        // pour chaque ligne (chaque enregistrement)
        foreach ($rowall as $row) {
            // DONNEES A AFFICHER dans chaque cellule de la ligne
            echo '
            <tr>
                <td>' . $row["Id"] . ' </td>
                <td>' . $row["Nom"] . '</td>
                <td>' . $row["Valeur"] . '</td>
                ';
            if ($edit){
                echo ' <td style="border: 0px;"><a href="index.php?action=supprimerCapteur&ID='.$row["Id"].'">Supprimer</a>    <a href="index.php?action=modifierCapteur&ID='.$row["Id"].'">Modifier</a>';
            }
            echo'</tr>';

        } // fin foreach

        echo '</tbody>
    </table></html>';


    } else { ?>
        pas de données à afficher
        <?php
    }
}
?>
