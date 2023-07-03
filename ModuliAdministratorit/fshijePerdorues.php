<?php

include("konfigurim.php");

$ID_Perdoruesi = $_GET['ID_Perdoruesi'];

$rezultati = mysqli_query($lidhu,"DELETE FROM umdas_perdoruesit WHERE ID_Perdoruesi=$ID_Perdoruesi");

header("Location: fshije_Perdorues.php");
?>
