<?php

include("konfigurim.php");

$ID_Rezervimi = $_GET['ID_Rezervimi'];

$rezultati = mysqli_query($lidhu,"DELETE FROM umdas_rezervimet_dekorimeve WHERE ID_Rezervimi=$ID_Rezervimi");

header("Location: fshije_Rezervim.php");
?>
