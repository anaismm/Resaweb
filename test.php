<?php

include("connexion.php");

$resa_id = '21';

$requete="SELECT dest.prix, resa.nb_voyageurs FROM destination dest, reservation resa, rel_resa_dest rel
WHERE dest.id=rel.id_destination AND resa.id=rel.id_reservation AND resa.id=$resa_id";
$stmt=$db->query($requete);
$result=$stmt-> fetchall(PDO::FETCH_ASSOC);

$total = 0;

foreach ($result as $dest) {
    $total += $dest["prix"] * $dest["nb_voyageurs"];
}

echo "Prix: $total €";