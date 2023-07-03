<?php
/* Faqja (home.php) e cila paraqitet pasi ambientei te llogohet me sukses */
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
										
										

												<!-- Buttons -->
													
													
													
													<p style="text-align:right;">Përshëndetje, <em><?php  echo $casja_perdoruesit;?>!</em></p>

												<!-- Form -->
												<section id="one" class="tiles">
								
													<article>
														<span class="image">
															<img src="images/pic06.jpg" alt="" />
														</span>
														<header class="major">
															<h3><a href="shto_Ambient.php" class="link">Shto ambient</a></h3>
															<p>Forma për shtimin e ambienteve të reja në webaplikacion me të drejta të administratorit.</p>
														</header>
													</article>
													<article>
														<span class="image">
															<img src="images/pic06.jpg" alt="" />
														</span>
														<header class="major">
															<h3><a href="modifiko_Ambient.php" class="link">Modifiko ambient</a></h3>
															<p>Forma për modifikim të ambienteve aktuale në webaplikacion me të drejta të administratorit.</p>
														</header>
													</article>
													<article>
														<span class="image">
															<img src="images/pic06.jpg" alt="" />
														</span>
														<header class="major">
															<h3><a href="fshije_Ambient.php" class="link">Fshije ambient</a></h3>
															<p>Forma për fshirje të ambienteve aktuale nga webaplikacioni me të drejta të administratorit .</p>
														</header>
													</article>
													
													
													<article>
														<span class="image">
															<img src="images/pic06.jpg" alt="" />
														</span>
														<header class="major">
															<h3><a href="shto_Dekorim.php" class="link">Shto dekorim</a></h3>
															<p>Forma për shtimin e dekorimeve të reja në webaplikacion me të drejta të administratorit.</p>
														</header>
													</article>
													<article>
														<span class="image">
															<img src="images/pic06.jpg" alt="" />
														</span>
														<header class="major">
															<h3><a href="modifiko_Dekorim.php" class="link">Modifiko dekorim</a></h3>
															<p>Forma për modifikimin e dekorimeve aktuale në webaplikacion me të drejta të administratorit.</p>
														</header>
													</article>
													<article>
														<span class="image">
															<img src="images/pic06.jpg" alt="" />
														</span>
														<header class="major">
															<h3><a href="fshije_Dekorim.php" class="link">Fshije dekorim</a></h3>
															<p>Forma për fshirjen e dekorimeve aktuale në webaplikacion me të drejta të administratorit.</p>
														</header>
													</article>
													
													
													<article>
														<span class="image">
															<img src="images/pic06.jpg" alt="" />
														</span>
														<header class="major">
															<h3><a href="shto_teDhena.php" class="link">Shto te dhene</a></h3>
															<p>Forma për shtimin e e te dhenave të reja në webaplikacion me të drejta të administratorit.</p>
														</header>
													</article>
													<article>
														<span class="image">
															<img src="images/pic06.jpg" alt="" />
														</span>
														<header class="major">
															<h3><a href="modifiko_teDhena.php" class="link">Modifiko te dhene</a></h3>
															<p>Forma për modifikimin e te dhenave aktuale në webaplikacion me të drejta të administratorit.</p>
														</header>
													</article>
													<article>
														<span class="image">
															<img src="images/pic06.jpg" alt="" />
														</span>
														<header class="major">
															<h3><a href="fshije_teDhena.php" class="link">Fshije te dhene</a></h3>
															<p>Forma për fshirjen e te dhenave aktuale në webaplikacion me të drejta të administratorit.</p>
														</header>
													</article>
													
												</section>
												
											
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