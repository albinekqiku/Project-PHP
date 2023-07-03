<?php
// including the database connection file // nuk u kry
include("kontrollim.php");
?>
<?php
include_once("konfigurim.php");
if(isset($_POST['modifikoAmbient']))
{	
	$ID_Ambienti=$_POST['ID_Ambienti'];
	$ID_Dekorimi=$_POST['ID_Dekorimi'];
	$Lloji_Ambientit=$_POST['Lloji_Ambientit'];	
	$Pershkrimi_ambientit=$_POST['Pershkrimi_ambientit'];
	
		$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
		$Emri_Foto = $_FILES['userfile']['name'];	
		$maxsize=10000000;
	
	// checking empty fields
	if(empty($Lloji_Ambientit) || empty($Pershkrimi_ambientit) ) {	
			
		
		
		if(empty($Lloji_Ambientit)) {
			echo "<font color='red'>Fusha lloji ambientit eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Pershkrimi_ambientit)) {
			echo "<font color='red'>Fusha pershkrimi eshte e zbrazet.</font><br/>";
		}	
		
			
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE umdas_ambientet SET Lloji_Ambientit='$Lloji_Ambientit', ID_Dekorimi='$ID_Dekorimi',Pershkrimi_ambientit='$Pershkrimi_ambientit', Foto='$imgData' ,Emri_Foto='$Emri_Foto' WHERE ID_Ambienti=$ID_Ambienti");
		
		//redirectig to the display pID_Ambienti. In our case, it is admin.php
		header("Location: modifiko_Ambient.php");
	}
}
?>
<?php
//getting ID_Ambienti from url
$ID_Ambienti = $_GET['ID_Ambienti'];

//selecting data associated with this particular ID_Ambienti
$rezultati = mysqli_query($lidhu,"SELECT * FROM umdas_ambientet WHERE ID_Ambienti=$ID_Ambienti");

while($rez = mysqli_fetch_array($rezultati))
{
	$ID_Dekorimi = $rez['ID_Dekorimi'];
	$Lloji_Ambientit = $rez['Lloji_Ambientit'];
	$Pershkrimi_ambientit=$rez['Pershkrimi_ambientit'];
	
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
												<h3>Modifiko të dhënat e ambientit</h3>
												<form style="width:80%" method="post" action="modifikoAmbient.php" enctype="multipart/form-data"  name="form1">
												
												<div class="row gtr-uniform">
														<div class="col-12">
														
														<table border="0">
														<tr>
																<select style="width:100%" name="ID_Dekorimi">
																	<option selected="selected">Zgjedh Dekorimin</option>
																			<?php
																		$rez=mysqli_query($lidhu,"SELECT * FROM umdas_dekorimet");
																		while($rresht=$rez->fetch_array())
																		{
																			?>
																			<option value="<?php echo $rresht['ID_Dekorimi']; ?>"><?php echo $rresht['Lloji_Dekorimit']; ?></option>
																			<?php
																		}
																			?>
																</select>
														</tr>
																	
																		<tr>
																		
																			<td>Ambienti</td>
																			<td><input type="text" name="Lloji_Ambientit" id="Lloji_Ambientit" value='<?php echo $Lloji_Ambientit;?>'   required /></td>
																		</tr>
																		
																		<tr>
																			<td>Pershkrimi<td>
																			<td><textarea name="Pershkrimi_ambientit" rows="5" cols="20"><?php echo $Pershkrimi_ambientit;?></textarea></td>
																		</tr>
																		
																		<tr>
																				<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
								
																				<td><input name="userfile" type="file" />			</td>
																		</tr>
																		
																		
																		<br>
																		<br>
																		
																		<tr>
										
																				<td><input type="hidden" name="ID_Ambienti" value='<?php echo $_GET['ID_Ambienti'];?>' /></td>
																				<td><input type="submit" name="modifikoAmbient" value="Modifiko" class="primary" /></td>
																			
																		</tr>
																	</table>
												
														</div>
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