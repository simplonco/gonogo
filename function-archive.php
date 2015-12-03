<?php
$reponse = $bdd->query('SELECT * FROM gng ORDER BY nom');

while ($donnes = $reponse->fetch()) {

if ($donnes['Note'] >= 19){
    $couleur = "info";
}
else if ($donnes['Note'] >= 15) {
    $couleur = "success";
}
else if ($donnes['Note'] >= 11) {
    $couleur = "warning";
}
else{
    $couleur = "danger";
}

?>
         <tr class="<?php echo $couleur;?>">
            <td><?php echo $donnes['nom']; ?></td>
            <td><?php echo $donnes['projet']; ?></td>
            <td><?php echo $donnes['imp']; ?></td>
            <td><?php echo $donnes['intSim']; ?></td>
            <td><?php echo $donnes['feel']; ?></td>
            <td><?php echo $donnes['cash']; ?></td>
            <td><?php echo $donnes['delais']; ?></td>
            <td><?php echo $donnes['tech']; ?></td>
            <td><?php echo $donnes['Note']; ?>/24</td>
            <td><a class="btn btn-default" role="button" href="delete.php?id=<?php echo $donnes['id']; ?>">Suppprimer Profil</a></td>
        </tr>

<?php
}


$reponse->closeCursor();
?>