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

?>