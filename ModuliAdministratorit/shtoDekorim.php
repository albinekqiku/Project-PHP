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

if(isset($_POST['shtoDekorim'])) {	
	$Lloji_Dekorimit = $_POST['Lloji_Dekorimit'];
	
		
	// checking empty fields
	if(empty($Lloji_Dekorimit)) {			
		if(empty($Lloji_Dekorimit)) {echo "<font color='red'>Fusha lloji dekorimit eshte e zbrazet.</font><br/>";}
		
		//link to the previous Fjalekalimi
		
	echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhu, "INSERT INTO umdas_dekorimet (Lloji_Dekorimit) VALUES('$Lloji_Dekorimit')");
		//display success messFjalekalimi
	echo "<script>
         setTimeout(function(){
            window.location.href = 'Ballina.php';
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