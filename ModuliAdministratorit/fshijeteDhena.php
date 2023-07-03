<?php

include("konfigurim.php");

$ID_tedhenat = $_GET['ID_tedhenat'];

$rezultati = mysqli_query($lidhu,"DELETE FROM umdas_tedhenat WHERE ID_tedhenat=$ID_tedhenat");

header("Location: fshije_teDhena.php");
?>
