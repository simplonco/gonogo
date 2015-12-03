<?php
error_reporting(E_ALL);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=nogogo;charset=utf8', 'root', 'root');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
//$nom = $_REQUEST["nom"];

$id = $_REQUEST["id"];

$del = $bdd->exec("DELETE FROM `nogogo`.`gng` WHERE `gng`.`id` = ".$id);

header('Location: http://dev/archives.php');
exit();

//echo "le profil choisi a été supprimé !";




?>