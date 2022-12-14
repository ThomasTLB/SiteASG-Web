<?php
include_once("BDDASG.php");
?>
<section class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner bg-faded text-center rounded">
					<h2 class="section-heading mb-4" id="creerContratOk">Enregistrement du contrat</h2>
						<?php
							$dateEffet=$_POST["dateEffet"];
							$typeContrat=$_POST["typeContrat"];
                            $dejaClient=$_POST["dejaClient"];
                            $dejaExclus=$_POST["dejaExclus"];
                            $motifDepart=$_POST["motifDepart"];
                            $montantMaxAssurer=$_POST["montantMaxAssurer"];
                            $degreAssurance=$_POST["degreAssurance"];
                            $MarqueVoiture=$_POST["MarqueVoiture"];
                            $villeDomicile=$_POST["villeDomicile"];
                            $titulaireContrat=($_SESSION["id"]);
                            $collaborateurSuivi=$_POST["collaborateurSuivi"];
							// on se connecte à la bdd
	                        $chaineconnexion=connexionbdd();
	                        //on execute l'insertion
	                        $resultatinsertion= insertioncontrat($dateEffet, $typeContrat, $dejaClient, $dejaExclus, $motifDepart, $montantMaxAssurer, $degreAssurance, $MarqueVoiture, $villeDomicile, $titulaireContrat, $collaborateurSuivi, $chaineconnexion);
	                        // pour afficher ce que la reqiête transmet a Mysql : echo "requete: ".$resultatinsertion
	                        // Si la requete est passé on prévient le client
	                        if ($resultatinsertion>=1)
	                        {
								echo "Votre contrat a bien été créer";
								?>
								</br>
								<?php
								if ($dejaClient == 0)
								{
									$resultatUpdate = updateNewClient($chaineconnexion);
									echo "Vous devenez un nouveau client !";
								}
								else 
								{
									$resultatOldUpdate = updateAlreadyClient($chaineconnexion);
									echo "Vous devenez un client Régulier !";
								}
							}
						?>
				</div>
			</div>
		</div>
	</div>
</section>