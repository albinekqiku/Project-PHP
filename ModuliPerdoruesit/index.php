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
					
				<!-- Meny-->
					<?php include_once("meny.php"); ?>

				<!-- Main -->
					<div id="main">
						<?php $rezultati = mysqli_query($lidhu, "SELECT  
				umdas_dekorimet.Lloji_Dekorimit,umdas_ambientet.Lloji_Ambientit, umdas_ambientet.Pershkrimi_ambientit, umdas_ambientet.Foto, umdas_ambientet.Emri_Foto FROM umdas_ambientet
				LEFT OUTER JOIN umdas_dekorimet ON umdas_ambientet.ID_Dekorimi = umdas_dekorimet.ID_Dekorimi				
				GROUP BY umdas_dekorimet.Lloji_Dekorimit,umdas_ambientet.Lloji_Ambientit, umdas_ambientet.Pershkrimi_ambientit, umdas_ambientet.Foto, umdas_ambientet.Emri_Foto
				ORDER BY umdas_dekorimet.ID_Dekorimi, umdas_ambientet.ID_Dekorimi DESC");
													while ($rresht = mysqli_fetch_assoc($rezultati)) {

														  extract($rresht);
												  
														  
									if($rezultati==null)
									  mysqli_free_result($rezultati);

						?>
						<!-- One -->
							<section id="one" class="tiles">
								<article style="width:100%">
									<span class="image">
										<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rresht['Foto'] ).'" width="100%" height="100%">'; ?>
									</span>
									<header class="major">
										<h3><?php echo $Lloji_Ambientit;?></h3>
										<p><?php echo $Pershkrimi_ambientit; ?></p>
										<p>E dekuruar me: <?php echo $Lloji_Dekorimit; ?></p>
										
									</header>
								</article>
								
							</section>
					<?php } ?>
						<!-- Two -->
							

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