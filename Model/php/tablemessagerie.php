<?php
/**
 * Created by PhpStorm.
 * User: antoi
 * Date: 06/05/2019
 * Time: 15:49
 */

function affmessage ()
{


    require('_connexionbdd.php');
    $query = "SELECT * FROM rapport ORDER BY identifiant ASC";

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
            <th>Nom</th>
            <th>Pr&eacute;nom</th>
            <th>Message</th>
        </tr>
        </thead>
        <tbody>';
        // pour chaque ligne (chaque enregistrement)
        foreach ($rowAll as $row) {
            // DONNEES A AFFICHER dans chaque cellule de la ligne
            echo '
            <tr>
                <td>' . $row["Nom"] . ' </td>
                <td>' . $row["Prenom"] . '</td>   
                <td>' . $row["Message"].'</td>
                <td></td>
                ';
        } // fin foreach

        echo '</tbody>
    </table></html>';


    } else { ?>
        pas de données à afficher
        <?php
    }
}
?>
