<?php
// ------------------------------------------------------------
// Connection à la Base de Données
// ------------------------------------------------------------
if( !function_exists('my_pdo_connexxion') )
{
    function my_pdo_connexxion()
    {
        // ---------
        $hostname	= 'localhost'; 		// voir hébergeur ou "localhost" en local
        $database	= 'espace_membre'; 	// nom de la BdD
        $username	= 'root'; 			// identifiant "root" en local
        $password	= ''; 				// mot de passe (vide en local)
        // ---------
        // connexion à la Base de Données
        try {
            // chaine de connexion (DSN)
            $strConn 	= 'mysql:host='.$hostname.';dbname='.$database.';charset=utf8';	// UTF-8
            $extraParam	= array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,		// rapport d'erreurs sous forme d'exceptions
                PDO::ATTR_PERSISTENT => true, 						// Connexions persistantes
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 	// fetch mode par defaut
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"	// encodage UTF-8
            );
            // Instancie la connexion
            $bdd = new PDO($strConn, $username, $password, $extraParam);
            return $bdd;
        }
            // ---------
        catch(PDOException $e){
            $msg = 'ERREUR PDO connexion...'; die($msg);
            return false;
        }
        // ---------
    }
}
// --------------------------------
$bdd	= my_pdo_connexxion();
// --------------------------------------------------------------