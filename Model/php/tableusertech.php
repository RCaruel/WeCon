<?php

function afftableau ($edit, $page)
{


    require('_connexionbdd.php');
    $query = "SELECT * FROM sousmembres ORDER BY identifiant ASC";

    try {
        $bdd = my_pdo_connexxionWeCon();
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
                <td>' . $row["nom"] . '</td>   
                <td></td>
                ';
            if ($edit){
                echo ' <td style="border: 0px;"><a href="index.php?action=supprimer&ID='.$row["identifiant"].'&page='. $page.'">Supprimer</a>    <a href="index.php?action=modifierCompte&ID='.$row["identifiant"].'&page='. $page.'">Modifier</a>';
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
