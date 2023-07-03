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

if(isset($_POST['shtoteDhena'])) {	
	$Titulli = $_POST['Titulli'];	
		
	$Pershkrimi = $_POST['Pershkrimi'];	
	
		$Pamja_Faqes = $_POST['Pamja_Faqes'];
	
			
	// checking empty fields
	if(empty($Titulli) || empty($Pershkrimi) || empty($Pamja_Faqes))
	{			
		if(empty($Titulli)) {
			echo "<font color='red'>Fusha titulli eshte e zbrazet.</font><br/>";
			}
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Fusha pershkrimi eshte e zbrazet.</font><br/>";
			}
		if(empty($Pamja_Faqes)) {
			echo "<font color='red'>Fusha pamja faqes eshte e zbrazet.</font><br/>";
			}
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhu, "INSERT INTO umdas_tedhenat (Titulli, Pershkrimi, Pamja_Faqes) VALUES('$Titulli','$Pershkrimi','$Pamja_Faqes')");
		//display success messpassword
	echo "<script>
         setTimeout(function(){
            window.location.href = 'Ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne uebaplikacion. Ju lutem pritni 5 sekonda. <b></p>";
	
		
	}
}
?>

</body>
</html>