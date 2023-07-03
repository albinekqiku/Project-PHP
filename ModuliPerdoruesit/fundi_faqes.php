	<footer id="footer">
		<div class="inner">
			<section class="split">
			<ul class="icons">
						<?php
									$rezultati = mysqli_query($lidhu, "SELECT * FROM umdas_tedhenat WHERE Pamja_Faqes='Fundi_Adresa'");
									while ($rresht = mysqli_fetch_assoc($rezultati)) {

									  extract($rresht);
						  
								  
									if($rezultati==null)
									mysqli_free_result($rezultati);

						?>
						
						<?php echo $Pershkrimi; ?>
						<?php } ?>
			</ul>
			</section>
			
			<ul class="icons">
							<?php
							$rezultati = mysqli_query($lidhu, "SELECT * FROM umdas_tedhenat WHERE Pamja_Faqes='Fundi_rrsociale'");
							while ($rresht = mysqli_fetch_assoc($rezultati)) {

							  extract($rresht);
							  
							  
							if($rezultati==null)
							  mysqli_free_result($rezultati);

							?>
			<?php echo $Pershkrimi; ?>
									
						<?php } ?>
			</ul>
			<ul class="copyright">
							<?php
							$rezultati = mysqli_query($lidhu, "SELECT * FROM umdas_tedhenat WHERE Pamja_Faqes='Fundi_copyright'");
							while ($rresht = mysqli_fetch_assoc($rezultati)) {

							  extract($rresht);
							  
							  
							if($rezultati==null)
							  mysqli_free_result($rezultati);

							?>
				<?php echo $Pershkrimi; ?>
									
						<?php } ?>
			</ul>
				
			</div>
	</footer>