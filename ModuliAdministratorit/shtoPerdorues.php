<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<body>
<?php
//including the database connection file
include_once("konfigurim.php");

if(isset($_POST['shtoPerdorues'])) {	
	$Emri = $_POST['Emri'];
	$Fjalekalimi = $_POST['Fjalekalimi'];
	
	$Email = $_POST['Email'];
		
	// checking empty fields
	if(empty($Emri) || empty($Fjalekalimi) || empty($Email)) {			
		if(empty($Emri)) {echo "<font color='red'>Fusha perdoruesi eshte e zbrazet.</font><br/>";}
		if(empty($Fjalekalimi)) {echo "<font color='red'>Fusha fjalekalimi eshte e zbrazet.</font><br/>";}
		
		if(empty($Email)) {echo "<font color='red'>Fusha Email eshte e zbrazet.</font><br/>";}
		//link to the previous Fjalekalimi
		
	echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhu, "INSERT INTO umdas_perdoruesit (Emri,Fjalekalimi,Email) VALUES('$Emri','$Fjalekalimi','$Email')");
		//display success messFjalekalimi
	echo "<script>
         setTimeout(function(){
            window.location.href = 'perdoruesit.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne uebaplikacion. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='perdoruesit.php'>View Result</a>";
	}
}
?>
</body>
</html>