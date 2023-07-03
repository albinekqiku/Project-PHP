<?php

	include("kontrollim.php");	
?>
<?php
// including the database connection file
include_once("konfigurim.php");

if(isset($_POST['modifikoDekorim']))
{	
	$ID_Dekorimi = $_POST['ID_Dekorimi'];
	
	$Lloji_Dekorimit=$_POST['Lloji_Dekorimit'];
	
	
	// checking empty fields
	if(empty($Lloji_Dekorimit)) {	
			
		if(empty($Lloji_Dekorimit)) {
			echo "<font color='red'>Fusha lloji dekorimit eshte e zbrazet.</font><br/>";
		}
			
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE umdas_dekorimet SET Lloji_Dekorimit='$Lloji_Dekorimit' WHERE ID_Dekorimi=$ID_Dekorimi");
		
		//redirectig to the display pFjalekalimi. In our case, it is admin.php
		header("Location: modifiko_Dekorim.php");
	}
}
?>
<?php
//getting ID_Dekorimi from url
$ID_Dekorimi = $_GET['ID_Dekorimi'];

//selecting data associated with this particular ID_Dekorimi
$rezultati = mysqli_query($lidhu,"SELECT * FROM umdas_dekorimet WHERE ID_Dekorimi=$ID_Dekorimi");

while($rez = mysqli_fetch_array($rezultati))
{
	$Lloji_Dekorimit = $rez['Lloji_Dekorimit'];
	
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
												<form Lloji_Dekorimit="form1" method="post" action="modifikoDekorim.php" style="width:50%">
						
													<h3>Modifiko të dhënat e dekorimit</h3>

													
														Dekorimi
														<input type="text" name="Lloji_Dekorimit" value='<?php echo $Lloji_Dekorimit;?>' />
														<br>
														
														<input type="hidden" name="ID_Dekorimi" value='<?php echo $_GET['ID_Dekorimi'];?>' />
														<input type="submit" name="modifikoDekorim" value="Modifiko">

												</form>
												
												
						</section>
					
					</div>

				<!-- Contact -->
					

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