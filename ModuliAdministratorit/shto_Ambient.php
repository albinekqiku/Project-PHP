<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollim.php");	
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
												<h3>Shto të dhënat e ambientit</h3>
												
												<form enctype="multipart/form-data"  name="form1" method="post" action="shtoAmbient.php">
												
														<div class="row gtr-uniform">
														<div class="col-6 col-12-xsmall">
														<table width="50%" border="0">
														<tr>
														
																<select style="width:70%" name="ID_Dekorimi">
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
																<td>Lloji ambientit</td>
																<td><input type="text" name="Lloji_Ambientit" id="Lloji_Ambientit" value=""  /></td>
															</tr>
															<tr>
																<td>Pershkrimi</td>
																<td><textarea name="Pershkrimi" rows="5" cols="20"></textarea></td>
															</tr>
															
															<tr>
																<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
																<td><input name="userfile" type="file" /></td>
															</tr>
															
														
															<tr>
																<td></td>
																<td><input type="submit" name="shtoAmbient" value="Shto" class="primary" /></td>
															</tr>
														
														
														</table>
													</div>
													</div>
													</form>
													
												
											
												<!-- Image -->
							

													

											

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