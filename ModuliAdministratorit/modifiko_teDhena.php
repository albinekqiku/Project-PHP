<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollim.php");	
?>
<?php
//including the database connection file
include_once("konfigurim.php");

//fetching data in descending order (lastest entry first)
$rezultati = mysqli_query($lidhu,
"SELECT * FROM umdas_tedhenat ORDER BY ID_tedhenat DESC");
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
												<form style="width:73%" method="post" action="">
														<table>
																<tr>
																<h3>Kërko të dhënë për modifikim</h3>
																</tr>
																
																<tr>
																	<td>
																		Shkruaj:
																	</td>
																	<td>
																		<input type="text" name="term" placeholder="Titullin ose Pamjen e faqes"/>
																	</td>
																	<td> <input type="submit" value="Kërko" /></td>
																</tr>
														</table>
												</form>
												
												<section>
												<div class="table-wrapper">
												<table width='80%' border=0>
														<div class="table-wrapper">
															<tr bgcolor='#CCCCCC'>
																<td>Titulli</td>
																<td>Pershkrimi</td>	
																
																<td>Pamja e faqes</td>
																<td>Modifiko</td>
															</tr> 
																	<?php
																	if (!empty($_REQUEST['term'])) {
																	$term = mysqli_real_escape_string
																	($lidhu,$_REQUEST['term']);     
																	$sql = mysqli_query($lidhu,
																	"SELECT	* FROM umdas_tedhenat
																		WHERE
																		 umdas_tedhenat.Titulli LIKE '%".$term."%' OR umdas_tedhenat.Pamja_Faqes LIKE '%".$term."%'"
																		  ); 
																	while($rresht = mysqli_fetch_array($sql)) { 		
																			echo "<tr>";
																			echo "<td>".$rresht['Titulli']."</td>";
																			echo "<td>".$rresht['Pershkrimi']."</td>";
																				
																		
																			
																			echo "<td>".$rresht['Pamja_Faqes']."</td>";
																			echo "<td><a href=\"modifikoteDhena.php?ID_tedhenat=$rresht[ID_tedhenat]\" class='button' class='button primary'>
																			Modifiko</a></td></tr>";		
																		}

																	}

																	?>
														</div>
													</table>
												
											
								</div>
								</section>
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