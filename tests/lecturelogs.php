<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 04/06/2019
 * Time: 09:25
 */

include "Model/php/"

$url = "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=9999";

$ch = curl_init($url);

$timeout = 10;

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

if (preg_match('`^https://`i', $url))
{
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
}

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Récupération du contenu retourné par la requête
$data = curl_exec($ch);

curl_close($ch);
echo "Raw Data :";
echo("$data");
echo "<br />";
$data_tab = str_split($data,33);
echo "Tabular Data:<br />";
for($i=0, $size=count($data_tab); $i<$size-1; $i++){
    echo "Trame $i: $data_tab[$i]<br />";
    $trame = $data_tab[$i];
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
        sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");
    if ($r == 1){
        echo "Récupération de la valeur : " . $v . " venant d'un capteur de type : ".$c;
        echo "<br>";
        echo "Date de la donnée : " . $day . "-" . $month . "-" . $year . " heure : " . $hour . ":" . $min . ":" . $sec;
        echo "<br>";
        if ($c == 3) {
            post($day."-".$month."-".$year, "luminosite", $v, Lumière,1);
        }else if($c == 7){
            post($day."-".$month."-".$year, "temperature", $v, Température,1);
        }
    }else if($r == 2){
        echo "Envoi de la valeur : " . $v . " pour un capteur de type : ".$c;
        echo "<br>";
        echo "Date de la donnée : " . $day . "-" . $month . "-" . $year . " heure : " . $hour . ":" . $min . ":" . $sec;
        echo "<br>";
    }
}

echo convert16IntoBase10("2222");

function convert16IntoBase10($value){
    $result = 0;
    $tab = ["A", "B", "C", "D", "E", "F"];
    for ($i = 1; $i <= strlen($value); $i++){
        if (in_array($value[strlen($value) - $i], $tab)){
            $coeff = 10 + array_search($value[strlen($value) - $i],$tab);
        }else {
            $coeff = $value[strlen($value) - $i];
        }
        $result += $coeff * 16**($i-1);
    }
    return $result;
}