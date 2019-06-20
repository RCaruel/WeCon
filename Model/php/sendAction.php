<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 11/06/2019
 * Time: 16:03
 */

$t = "1"; //trame a longueur fixe
$o = "010C"; //numéro de l'équipe
$r = "2"; //envoi d'une trame
$c = "a"; //type de capteur
$n = "01"; //numéro du capteur
$v = "1"; //valeur
$a = "1"; //numéro de la trame
$x = "1"; //checksum
$y = date("Y", time() - 7200);
$M = date("m", time() - 7200);
$d = date("d", time() - 7200);
$H = date("H", time() - 7200);
$m = date("i", time() - 7200);
$s = date("s", time() - 7200);

$trame = $t. $o. $r. $c. $n. $v. $a. $x. $y. $M . $d. $H. $m.$s;
$url = "http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=010C&TRAME=" . $trame;

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
echo 'ok';