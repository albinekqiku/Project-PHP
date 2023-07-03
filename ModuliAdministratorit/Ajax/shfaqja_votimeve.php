<html>
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		
<?php
include('../konfigurim.php');
session_start();
$verifiko_perdorues=$_SESSION['Emri'];
$sesion_sql = mysqli_query($lidhu,"SELECT ID_Perdoruesi, Emri FROM umdas_perdoruesit WHERE Emri='$verifiko_perdorues' ");
$rresht=mysqli_fetch_array($sesion_sql,MYSQLI_ASSOC);
$casja_perdoruesit=$rresht['Emri'];
if(!isset($verifiko_perdorues))
{ header("Location: index.php");} 

	
    $_SESSION["pjesemarresi_id"] =  $rresht['ID_Perdoruesi'];
    
	require("kontrolluesi_databazes.php");
	$dbController = new DBController();
	
	$query = "SELECT DISTINCT pyetja_id from umdas_votimi WHERE pjesemarresi_id = " . $_SESSION["pjesemarresi_id"]; 
	$rezultati = $dbController->getIds($query);
	
	$kushti = "";
	if(!empty($rezultati)) {
	    $kushti = " WHERE id NOT IN (" . implode(",", $rezultati) . ")";
    }
    
    $query = "SELECT * FROM `umdas_pyetjet` " . $kushti . " limit 1";
    $pyetjet = $dbController->runQuery($query);
    
    if(!empty($pyetjet)) {
?>      
		<div class="question"><?php echo $pyetjet[0]["pyetja"]; ?><input type="hidden" name="pyetja" id="pyetja" value="<?php echo $pyetjet[0]["id"]; ?>" ></div>      
<?php 
        $query = "SELECT * FROM umdas_pergjigjet WHERE pyetja_id = " . $pyetjet[0]["id"];
        $pergjigjet = $dbController->runQuery($query);
        if(!empty($pergjigjet)) {
            foreach($pergjigjet as $k=>$v) {
                ?>
			<div class="question"><input type="radio" name="pergjigja" class="radio-input" value="<?php echo $pergjigjet[$k]["id"]; ?>" /><?php echo $pergjigjet[$k]["pergjigja"]; ?></div>      
<?php 
            }
        }
?>
		<div class="poll-bottom">
			<button id="btnSubmit" onClick="shto_votimin()">Dergo</button>
		</div>
<?php        
    } else {
?>

<div class="error">Votimi perfundoi me sukses!</div>


<?php 
    }
?>