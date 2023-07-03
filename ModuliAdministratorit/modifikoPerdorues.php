<?php
	include("kontrollim.php");	
?>
<?php
// including the database connection file
include_once("konfigurim.php");

if(isset($_POST['modifikoPerdorues']))
{	
	$ID_Perdoruesi = $_POST['ID_Perdoruesi'];
	
	$Emri=$_POST['Emri'];
	$Fjalekalimi=$_POST['Fjalekalimi'];
	
	$Email=$_POST['Email'];	
	
	// checking empty fields
	if(empty($Emri) || empty($Fjalekalimi)  || empty($Email)) {	
			
		if(empty($Emri)) {
			echo "<font color='red'>Fusha perdoruesi eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Fjalekalimi)) {
			echo "<font color='red'>Fusha fjalekalimi eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Email)) {
			echo "<font color='red'>fusha email eshte e zbrazet.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE umdas_perdoruesit SET Emri='$Emri',Fjalekalimi='$Fjalekalimi',Email='$Email' WHERE ID_Perdoruesi=$ID_Perdoruesi");
		
		//redirectig to the display pFjalekalimi. In our case, it is admin.php
		header("Location: modifiko_Perdorues.php");
	}
}
?>
<?php
//getting ID_Perdoruesi from url
$ID_Perdoruesi = $_GET['ID_Perdoruesi'];

//selecting data associated with this particular ID_Perdoruesi
$rezultati = mysqli_query($lidhu,"SELECT * FROM umdas_perdoruesit WHERE ID_Perdoruesi=$ID_Perdoruesi");

while($rez = mysqli_fetch_array($rezultati))
{
	$Emri = $rez['Emri'];
	$Fjalekalimi = $rez['Fjalekalimi'];
	$Email = $rez['Email'];
}
?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php include_once("fillimi_faqes.php"); ?>

				<!-- Menu -->
					<?php include_once("meny.php"); ?>
				
				<!-- Main -->
				
				<div id="main" class="alt">

						<!-- One -->
						<section id="one">
								<div class="inner">
									
								
									<!-- Content -->
										

									<!-- Elements -->
										
										

												<!-- Buttons -->
													
													
													
												<p style="text-align:right;">Përshëndetje, <em><?php  echo $casja_perdoruesit;?>!</em></p>

												<!-- Form -->
												<form Emri="form1" method="post" action="modifikoPerdorues.php" style="width:50%">
						
													<h3>Modifiko të dhënat e përdoruesit</h3>

													
														Përdoruesi
														<input type="text" name="Emri" value='<?php echo $Emri;?>' />
														<br>
														Fjalëkalimi
														<input type="text" name="Fjalekalimi" value='<?php echo $Fjalekalimi;?>' />
														<br>
														
														Email-i
														<input type="email" name="Email" value='<?php echo $Email;?>' />
														<br >
														<input type="hidden" name="ID_Perdoruesi" value='<?php echo $_GET['ID_Perdoruesi'];?>' />
														<input type="submit" name="modifikoPerdorues" value="Modifiko">

												</form>
												
												
						</section>
					
					</div>

				<!-- Contact -->
				</div>

				<!-- Footer -->
						<?php include_once("fundi_faqes.php"); ?>

		
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>