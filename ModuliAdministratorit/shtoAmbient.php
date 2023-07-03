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

if(isset($_POST['shtoAmbient'])) {	
	$Lloji_Ambientit = $_POST['Lloji_Ambientit'];	
	$ID_Dekorimi = $_POST['ID_Dekorimi'];	
	$Pershkrimi = $_POST['Pershkrimi'];	
	
		
	
			$imgData = addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
			$Emri_Foto = $_FILES['userfile']['name'];
	
			$maxsize = 10000000; // 10 mb
	// checking empty fields
	if(empty($Lloji_Ambientit) || empty($Pershkrimi))
	{			
		if(empty($Lloji_Ambientit)) {
			echo "<font color='red'>Fusha lloji ambientit eshte e zbrazet.</font><br/>";
			}
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Fusha pershkrimi eshte e zbrazet.</font><br/>";
			}
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhu, "INSERT INTO umdas_ambientet (Lloji_Ambientit, ID_Dekorimi, Pershkrimi_ambientit, Foto, Emri_Foto ) VALUES('$Lloji_Ambientit','$ID_Dekorimi','$Pershkrimi','$imgData','$Emri_Foto')");
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