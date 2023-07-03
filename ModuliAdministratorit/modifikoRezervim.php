<?php
// including the database connection file // nuk u kry
include("kontrollim.php");
?>
<?php
include_once("konfigurim.php");
if(isset($_POST['modifikoRezervim']))
{	
	$ID_Rezervimi=$_POST['ID_Rezervimi'];
	$ID_Ambienti=$_POST['ID_Ambienti'];
	$Emri=$_POST['Emri'];	
	$Mbiemri=$_POST['Mbiemri'];
	$Data_takimit=$_POST['Data_takimit'];	
	$Email=$_POST['Email'];	
	
	// checking empty fields
	if(empty($Emri) || empty($Mbiemri) || empty($Data_takimit) || empty($Email)) {	
			
		
		
		if(empty($SEmri)) {
			echo "<font color='red'>Fusha emri eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Mbiemri)) {
			echo "<font color='red'>Fusha mbiemri eshte e zbrazet.</font><br/>";
		}	
		if(empty($Data_takimit)) {
					echo "<font color='red'>Fusha data takimit eshte e zbrazet.</font><br/>";
				}
		if(empty($Email)) {
			echo "<font color='red'>Fusha email eshte e zbrazet.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE umdas_rezervimet_dekorimeve SET ID_Ambienti='$ID_Ambienti',Emri='$Emri', Mbiemri='$Mbiemri', Data_takimit='$Data_takimit',Email='$Email' WHERE ID_Rezervimi=$ID_Rezervimi");
		
		//redirectig to the display pID_Ambienti. In our case, it is admin.php
		header("Location: modifiko_Rezervim.php");
	}
}
?>
<?php
//getting ID_Rezervimi from url
$ID_Rezervimi = $_GET['ID_Rezervimi'];

//selecting data associated with this particular ID_Rezervimi
$rezultati = mysqli_query($lidhu,"SELECT * FROM umdas_rezervimet_dekorimeve WHERE ID_Rezervimi=$ID_Rezervimi");

while($rez = mysqli_fetch_array($rezultati))
{
	$ID_Ambienti = $rez['ID_Ambienti'];
	$Emri = $rez['Emri'];
	$Mbiemri=$rez['Mbiemri'];
	$Data_takimit = $rez['Data_takimit'];
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
												<h3>Modifiko të dhënat e rezervimit</h3>
												<form style="width:50%" method="post" action="modifikoRezervim.php">
												
														<div class="row gtr-uniform">
														<div class="col-12">
																<select style="width:100%" name="ID_Ambienti">
																	<option selected="selected">Zgjedh Ambientin</option>
																			<?php
																		$rez=mysqli_query($lidhu,"SELECT * FROM umdas_ambientet");
																		while($rresht=$rez->fetch_array())
																		{
																			?>
																			<option value="<?php echo $rresht['ID_Ambienti']; ?>"><?php echo $rresht['Lloji_Ambientit']; ?></option>
																			<?php
																		}
																			?>
																</select>
																		<br>
																		Emri
																			<input type="text" name="Emri" id="Emri" value='<?php echo $Emri;?>'   required />
																		<br>
																		Mbiemri
																			<input type="text" name="Mbiemri" id="Mbiemri" value='<?php echo $Mbiemri;?>'   required />
																		<br>
																		Email-i
																			<input type="email" name="Email" id="Email" value='<?php echo $Email;?>'   required />
																		<br>
																		Data e takimit
																		<input type="date" name="Data_takimit" id="Data_takimit" value='<?php echo $Data_takimit;?>'   required />
																		
																		<br>
																		<br>
																		<input type="hidden" name="ID_Rezervimi" value='<?php echo $_GET['ID_Rezervimi'];?>' />
																		<input type="submit" name="modifikoRezervim" value="Modifiko" class="primary" />
																		
																	
																	</div>
													
													</form>
										</div>
												
												
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