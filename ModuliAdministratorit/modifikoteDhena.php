<?php
// including the database connection file // nuk u kry
include("kontrollim.php");
?>
<?php
include_once("konfigurim.php");
if(isset($_POST['modifikoteDhena']))
{	
	$ID_tedhenat=$_POST['ID_tedhenat'];
	$Titulli=$_POST['Titulli'];	
	$Pershkrimi=$_POST['Pershkrimi'];
	
	$Pamja_Faqes=$_POST['Pamja_Faqes'];
		
	// checking empty fields
	if(empty($Titulli) || empty($Pershkrimi) || empty($Pamja_Faqes)  ) {	
			
		
		
		if(empty($Titulli)) {
			echo "<font color='red'>Fusha titulli  eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Fusha pershkrimi eshte e zbrazet.</font><br/>";
		}	
			
		if(empty($Pamja_Faqes)) {
			echo "<font color='red'>Fusha pamja faqes eshte e zbrazet.</font><br/>";
		}	
		
			
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidhu,"UPDATE umdas_tedhenat SET Titulli='$Titulli',Pershkrimi='$Pershkrimi',Pamja_Faqes='$Pamja_Faqes' WHERE ID_tedhenat=$ID_tedhenat");
		
		//redirectig to the display pID_tedhenat. In our case, it is admin.php
		header("Location: modifiko_teDhena.php");
	}
}
?>
<?php
//getting ID_tedhenat from url
$ID_tedhenat = $_GET['ID_tedhenat'];

//selecting data associated with this particular ID_tedhenat
$rezultati = mysqli_query($lidhu,"SELECT * FROM umdas_tedhenat WHERE ID_tedhenat=$ID_tedhenat");

while($rez = mysqli_fetch_array($rezultati))
{
	
	$Titulli = $rez['Titulli'];
	$Pershkrimi=$rez['Pershkrimi'];

	$Pamja_Faqes=$rez['Pamja_Faqes'];
	
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

				<header id="header">
						<a href="index.php" class="logo"><strong></strong></a>
						<nav>
							<a href="#menu">Menyte</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="Ballina.php">Ballina</a></li>
							<li><a href="rezervimet_dekorimeve.php">Rezervimet e dekorimeve</a></li>
							<li><a href="perdoruesit.php">Perdoruesit</a></li>
							<li><a href="logout.php">Ckycu</a></li>
						</ul>
						
					</nav>
				
				<!-- Header -->
				<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Uebaplikacioni per Menaxhimin e Dekorimit te Ambienteve Solemne (UMDAS)</h1>
							</header>
							
						</div>
					</section>
					
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
												<h3>Modifiko të dhënë</h3>
												<form style="width:50%" method="post" action="modifikoteDhena.php" enctype="multipart/form-data"  name="form1">
												
														<div class="row gtr-uniform">
														<div class="col-12">
														
															Titulli
															<input type="text" name="Titulli" value='<?php echo $Titulli;?>'   required />
															<br>
															Pershkrimi
															
															<textarea name="Pershkrimi"  rows="10" cols="30"><?php echo $Pershkrimi;?></textarea>
															<br>
															
															Pamja e faqes
															<input type="text" name="Pamja_Faqes" value='<?php echo $Pamja_Faqes;?>'   required />
															<br >
															<input type="hidden" name="ID_tedhenat" value='<?php echo $_GET['ID_tedhenat'];?>' />
															<input type="submit" name="modifikoteDhena" value="Modifiko">
														
														</div>
														</div>
													
													</form>
										</div>
												
												
						</section>
					
					</div>

				<!-- Contact -->
					

				<!-- Footer -->
						<footer id="footer">
						<div class="inner">
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">sarakeqmezi@gmail.com</a>
									</div>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Numri kontaktues</h3>
										<span>(+383) 45-987-562 </span>
									</div>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Adresa</h3>
										<span>rr. Zija Shemsiu pn. 60000 Gjilan</span>
									</div>
								</section>
							</section>
						
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							
							<ul class="copyright">
								<li>&copy; Untitled. Të gjitha drejtat e rezervuara.</li>
					
								<li>&copy; Meritat e @html5upnet për shabllonin falas <a href="https://html5up.net/license">Creative Commons</a></li>
							</ul>
						</div>
					</footer>

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