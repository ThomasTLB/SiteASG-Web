<?php
include_once("BDDASG.php");
?>
<section class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner bg-faded text-center rounded">
                    <?php
                    $actualiteChoisi=$_POST["actualiteChoisi"];
                    $chaineconnexion=connexionbdd();
                    $resultatDelete = suppActu($actualiteChoisi, $chaineconnexion);
					if($resultatDelete>=1)
					{
						echo"La suppression est effectuer";
						echo "<meta http-equiv='refresh' content='3;url=index.php?id=gestionAdmin'>";
					}
					else
					{
						echo"La suppression à echouer";
						echo "<meta http-equiv='refresh' content='3;url=index.php?id=gestionAdmin'>";
					}
                    ?>
                </div>
			</div>
		</div>
	</div>
</section>