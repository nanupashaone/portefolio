<?php

$dbhost = 'sqlgold.webmo.fr';
$dbname = 'web202223billy';
$dbuser = 'web202223billy';
$dbpswd = 'prQOHUSTBJiV';



/* TRY CATCH BUG ET EMPECHE L'acces au site
try{
    $db = new PDO('msql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}catch(PDOexception $e) {
    die("Une erreur est survenue lors de la connexion de la base de données");
}

*/ 