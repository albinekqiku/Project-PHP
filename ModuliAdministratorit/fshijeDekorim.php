<?php

include("konfigurim.php");

$ID_Dekorimi = $_GET['ID_Dekorimi'];

$rezultati = mysqli_query($lidhu,"DELETE FROM umdas_dekorimet WHERE ID_Dekorimi=$ID_Dekorimi");

header("Location: fshije_Dekorim.php");
?>
