<?php
include_once("BDDASG.php");
?>
<section class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner bg-faded text-center rounded">
                    <?php
                    $actualiter=$_POST["actualiteChoisi"];
                    $chaineconnexion=connexionbdd();
                    suppActu($actualiter, $chaineconnexion);
                    ?>
                </div>
			</div>
		</div>
	</div>
</section>