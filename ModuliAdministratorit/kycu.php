<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese Emri dhe Fjalekalimii qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
	session_start();
	include("konfigurim.php"); //Establishing connection with our database
	
	$gabim = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["Emri"]) || empty($_POST["Fjalekalimi"]))
		{
			$gabim = "Të dy fushat kërkohen të plotësohen";
		}else
		{
			// Define $Emri and $Fjalekalimi
			$Emri=$_POST['Emri'];
			$Fjalekalimi=$_POST['Fjalekalimi'];
			//Check Emri and Fjalekalimi from database
			$sql="SELECT ID_Perdoruesi FROM umdas_perdoruesit WHERE Emri='$Emri' 
			and Fjalekalimi='$Fjalekalimi'";
			$rezultati=mysqli_query($lidhu,$sql);
			$rresht=mysqli_fetch_array($rezultati,MYSQLI_ASSOC);
			//If Emri and Fjalekalimi exist in our database then create a session.
			//Otherwise echo error.
			if(mysqli_num_rows($rezultati) == 1)
			{
				$_SESSION['Emri'] = $Emri; // Initializing Session
				header("location: faqja_administruese.php"); // Redirecting To Other Page
			}else
			{
				$gabim = "Përdoruesi ose Fjalëkalimi gabim";
			}
		}
	}
?>