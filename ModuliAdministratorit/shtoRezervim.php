<html>
	<head>
		<title>Moduli Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<body>
<?php
//including the database connection file
include_once("konfigurim.php");

if(isset($_POST['shtoRezervim'])) {	
	
	$Emri = $_POST['Emri'];
	$Mbiemri = $_POST['Mbiemri'];
	$Email = $_POST['Email'];
	$Data_takimit = $_POST['Data_takimit'];
	$ID_Ambienti = $_POST['ID_Ambienti'];
	
	// checking empty fields
	if( empty($Emri) || empty($Mbiemri)|| empty($Email) || empty($Data_takimit)) {			
		
		if(empty($Emri)) {echo "<font color='red'>Fusha emri eshte e zbrazet.</font><br/>";}
		if(empty($Email)) {echo "<font color='red'>Fusha email eshte e zbrazet.</font><br/>";}
		if(empty($Mbiemri)) {echo "<font color='red'>Fusha mbiemri eshte e zbrazet.</font><br/>";}
		if(empty($Data_takimit)) {echo "<font color='red'>Fusha data takimit eshte e zbrazet.</font><br/>";}
		
		//link to the previous Emri
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhu, "INSERT INTO umdas_rezervimet_dekorimeve(Emri,Mbiemri,Email,Data_takimit,ID_Ambienti) VALUES('$Emri','$Mbiemri','$Email','$Data_takimit','$ID_Ambienti')");
		//display success messEmri
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='contact.php'>View Result</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'rezervimet_dekorimeve.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne uebaplikacion. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>