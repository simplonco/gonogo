<?php
include("header.php");

error_reporting(E_ALL);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=nogogo;charset=utf8', 'root', 'root');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

    <table class="table table-bordered">
        <tr>
            <td> Nom Client</td>
            <td> Projet </td>
            <td> Impact </td>
            <td> Intérêt pour Simplon </td>
            <td> Feeling avec le client </td>
            <td> Argent </td>
            <td> Délais </td>
            <td> Technos </td>
            <td> Note </td>
        </tr>

            <?php  include("function-archive.php"); ?>

</table>
<?php include ("footer.php"); ?>
