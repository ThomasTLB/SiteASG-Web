<?php
include_once("BDDASG.php");
?>
<section class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner bg-faded text-center rounded">
					<h2 class="section-heading mb-4" id="deconnecter">Deconnexion</h2>
						<?php
                            if (isset($_POST["deco"]))
                            {
                                unset($_SESSION["login"]);
                                unset($_SESSION["mdp"]);
                                unset($_SESSION["nom"]);
                                unset($_SESSION["prenom"]);
                                session_destroy();
                                echo "Vous ête deconnecté";
                                echo "<meta http-equiv='refresh' content='3;url=index.php'>";
                            }
						?>
				</div>
			</div>
		</div>
	</div>
</section>