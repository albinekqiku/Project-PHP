<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php include_once("konfigurim.php"); ?>
<html>
	<head>
		<title>Moduli Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main_1.css" />
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
										
										<div class="row gtr-200">
											
											<div class="col-6 col-12-medium">

												<!-- Buttons -->
													
													
													
													

												<!-- Form -->
													<h3>Te dhenat per rezervimin</h3>

													<form method="post" action="rezervoDekorimin.php">
														<div class="row gtr-uniform">
														<div class="col-12">
																<select style="width:70%" name="ID_Ambienti">
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
															</div>
															
															<div style="width:71%" class="col-6 col-12-xsmall">
																<input type="text" name="Emri" id="Emri" value="" placeholder="Emri" />
															<br>
																<input type="text" name="Mbiemri" id="Mbiemri" value="" placeholder="Mbiemri" />
															<br>
																<input type="email" name="Email" id="Email" value="" placeholder="Email-i" />
															<br>
																<input type="date" name="Data_takimit" id="Data_takimit" value="" placeholder="Data e takimit" />
															</div>
															
															
															
													
													<div class="col-12">
														<ul class="actions">
														<li><input type="submit" name="rezervoDekorimin" value="Rezervo" class="primary" /></li>
														
														</ul>
													</div>
													</div>
												<!-- Image -->
													</form>

													

											</div>
										</div>

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