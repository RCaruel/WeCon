<?php

function afftableau ($edit)
{


    require('_connexionbdd.php');

    $query = "SELECT * FROM membres ORDER BY id ASC";

    try {
        $bdd_select = $bdd->prepare($query);
        $bdd_select->execute();
        $NbreData = $bdd_select->rowCount();    // nombre d'enregistrements (lignes)
        $rowAll = $bdd_select->fetchAll();
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
            <th>Identifiant</th>
            <th>Type d\'utilisateur</th>
            <th>Détail compte</th>
        </tr>
        </thead>
        <tbody>';
        // pour chaque ligne (chaque enregistrement)
        foreach ($rowAll as $row) {
            // DONNEES A AFFICHER dans chaque cellule de la ligne
            echo '
            <tr>
                <td>' . $row["identifiant"] . ' </td>
                <td>' . $row["type_utilisateur"] . '</td>   
                <td></td>
                ';
            if ($edit){
                echo ' <td style="border: 0px;"><a href="index.php?action=supprimer&ID='.$row['ID'].'">Supprimer</a>    <a href="#modifier">Modifier</a>';
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
