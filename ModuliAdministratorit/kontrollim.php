<?php
/* Kontrollon sesionin */
include('konfigurim.php');
session_start();
$verifiko_perdorues=$_SESSION['Emri'];
$sesion_sql = mysqli_query($lidhu,"SELECT Emri FROM umdas_perdoruesit WHERE Emri='$verifiko_perdorues' ");
$rresht=mysqli_fetch_array($sesion_sql,MYSQLI_ASSOC);
$casja_perdoruesit=$rresht['Emri'];
if(!isset($verifiko_perdorues))
{ header("Location: index.php");} 
?>