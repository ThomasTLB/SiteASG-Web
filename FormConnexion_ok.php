<?php
include_once("BDDASG.php");
?>
<section class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner bg-faded text-center rounded">
					<h2 class="section-heading mb-4" id="connecterok">Me Connecter</h2>
						<?php
							$chaineconnexion=connexionbdd();
							$login=$_POST["login"];
							$mdp=$_POST["mdp"];
							$ligne2=recupdescollaborateur($login, $mdp, $chaineconnexion);
							if($ligne2>=1)
							{ 
                                echo "Vous ête connecté";
								$_SESSION["login"]=$login;
								$_SESSION["mdp"]=$mdp;
                                $_SESSION["nom"]=$ligne2["nom_collaborateur"];
			                    $_SESSION["prenom"]=$ligne2["prenom_collaborateur"];
								$_SESSION["id"]=$ligne2["id_collaborateur"];
								$_SESSION["rôle"]=$ligne2["role_collaborateur"];
								echo "<meta http-equiv='refresh' content='3;url=index.php'>";
							}
							else
							{
								echo "Erreur de login ou de mot de passe, vous allez être rediriger";
								echo "<meta http-equiv='refresh' content='3;url=index.php?id=connexion'>";
							}
						?>
				</div>
			</div>
		</div>
	</div>
</section>