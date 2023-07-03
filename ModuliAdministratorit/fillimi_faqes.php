		<header id="header" class="alt">
						<a href="index.php" class="logo"><strong></strong></a>
						<nav>
							<a href="#menu">Menyte</a>
						</nav>
					</header>
	
						<?php
						$rezultati = mysqli_query($lidhu, "SELECT * FROM umdas_tedhenat WHERE Pamja_Faqes='Fillimi'");
						while ($rresht = mysqli_fetch_assoc($rezultati)) {

						  extract($rresht);
						  
						  
					if($rezultati==null)
					mysqli_free_result($rezultati);

				?>
				
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1><?php echo $Titulli ?></h1>
							</header>
							<div class="content">
								<p><?php echo $Pershkrimi ?></p>
							</div>
						</div>
					</section>
		<?php } ?>	
	