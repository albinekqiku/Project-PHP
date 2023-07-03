		
					<?php
						$rezultati = mysqli_query($lidhu, "SELECT * FROM umdas_tedhenat WHERE Pamja_Faqes='Meny_Administratori'");
						while ($rresht = mysqli_fetch_assoc($rezultati)) {

						  extract($rresht);
							 echo $Pershkrimi;
			  
						if($rezultati==null)
						  mysqli_free_result($rezultati);

							}
					?>