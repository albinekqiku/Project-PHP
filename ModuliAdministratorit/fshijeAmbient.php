<?php

include("konfigurim.php");

$ID_Ambienti = $_GET['ID_Ambienti'];

$rezultati = mysqli_query($lidhu,"DELETE FROM umdas_ambientet WHERE ID_Ambienti=$ID_Ambienti");

header("Location: fshije_Ambient.php");
?>
