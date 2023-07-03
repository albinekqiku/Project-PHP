<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollim.php");	
?>
<?php
//including the database connection file
include_once("konfigurim.php");

//fetching data in descending order (lastest entry first)
$rezultati = mysqli_query($lidhu,
"SELECT * FROM umdas_rezervimet_dekorimeve ORDER BY ID_Rezervimi DESC");
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
																<h3>Kërko të dhënat e rezervimit për modifikim</h3>
																</tr>
																
																<tr>
																	<td>
																		Shkruaj:
																	</td>
																	<td>
																		<input type="text" name="term" placeholder="Emrin ose Emaili-in"/>
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
																<td>Emri</td>
																<td>Mbiemri</td>
																<td>Email</td>	
																<td>Data e takimit</td>
																<td>Ambienti</td>
																<td>Modifiko</td>
															</tr> 
																	<?php
																	if (!empty($_REQUEST['term'])) {
																	$term = mysqli_real_escape_string
																	($lidhu,$_REQUEST['term']);     
																	$sql = mysqli_query($lidhu,
																	"SELECT	umdas_rezervimet_dekorimeve.ID_Rezervimi,
																		umdas_ambientet.Lloji_Ambientit,
																		umdas_rezervimet_dekorimeve.Emri,
																		umdas_rezervimet_dekorimeve.Mbiemri,
																		umdas_rezervimet_dekorimeve.Data_takimit,
																		umdas_rezervimet_dekorimeve.Email
				
																		FROM
																		  umdas_rezervimet_dekorimeve
																		INNER JOIN
																		  umdas_ambientet ON umdas_rezervimet_dekorimeve.ID_Ambienti = umdas_ambientet.ID_Ambienti
																		WHERE
																		  umdas_rezervimet_dekorimeve.Emri LIKE '%".$term."%' OR umdas_rezervimet_dekorimeve.Email LIKE '%".$term."%'"
																		  ); 
																	while($rresht = mysqli_fetch_array($sql)) { 		
																			echo "<tr>";
																			echo "<td>".$rresht['Emri']."</td>";
																			echo "<td>".$rresht['Mbiemri']."</td>";
																			echo "<td>".$rresht['Email']."</td>";	
																			echo "<td>".$rresht['Data_takimit']."</td>";
																			
																			echo "<td>".$rresht['Lloji_Ambientit']."</td>";
																			echo "<td><a href=\"modifikoRezervim.php?ID_Rezervimi=$rresht[ID_Rezervimi]\" class='button' class='button primary'>
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