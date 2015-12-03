<?php
include('header.php');
error_reporting(E_ALL);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=nogogo;charset=utf8', 'root', 'root');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$name  = $_REQUEST["name"];
$proj  = $_REQUEST["projet"];
$n1 = $_REQUEST["imp"];
$n2 = $_REQUEST["intSim"];
$n3 = $_REQUEST["feel"];
$n4 = $_REQUEST["cash"];
$n5 = $_REQUEST["delais"];
$n6 = $_REQUEST["tech"];
$s = $n6 + $n5 + $n4 + $n3 + $n2 + $n1;







if ($name != '' AND $proj != '' AND $n1 != '' AND $n2 != '' AND $n3 != '' AND $n4 != '' AND $n5 != '' AND $n6 != '') {

    $sql = "INSERT INTO gng (id, nom, projet, imp, intSim, feel, cash, delais, tech, Note)";

    $sql .= " VALUES ('', '$name', '$proj', '$n1', '$n2', '$n3', '$n4', '$n5', '$n6', '$s')";

    $result = $bdd->query($sql);

    if ($s >= 19) {
            $statut = "info";
            $tag = "Super !";
    }
    else if ($s >=15){
            $statut = "succes";
            $tag = "C'est cool";
    }
    else if ($s >=11){
            $statut = "warning";
            $tag = "Bof, à voir";
    }
    else {
            $statut = "danger";
            $tag = "Nul !";
    }
        ?>
            <button onclick="self.location.href='index.php'" type="button" class="btn btn-<?php echo $statut;?>"><?php echo $tag;?></button>
        <?php

}

else echo "Vous devez remplir tous les champs !";








?>