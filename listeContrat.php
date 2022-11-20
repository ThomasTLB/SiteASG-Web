<section class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner bg-faded text-center rounded">
					<h2 class="section-heading mb-4">Liste de mes contrats</h2>
                        <?php
                        { 
                            // connexion a la base de données
                            $chaineconnexion=connexionbdd();
                            // on appelle la fonction de récupération des contrat
                            $exec = recupdesContrats($chaineconnexion);
                            while($ligne=mysqli_fetch_array($exec))
                            {
                                if ($ligne["type_contrat"]=="Assurance Auto")
                                {
                                echo "<option> Date effective : $ligne[dateEffet], Type de contrat : $ligne[type_contrat], Motif de départ : $ligne[motifDepart_Contrat], </br> Montant assurer : $ligne[montantMaxAssurer_Contrat], Degré d'assurance : $ligne[degreAssurance_Contrat], Marque de voiture : $ligne[MarqueVoiture_Contrat], </br> Titulaire : $_SESSION[prenom] $_SESSION[nom], Référent : $ligne[nom_collaborateur] $ligne[prenom_collaborateur] </br></option>";
                                }
                                elseif($ligne["type_contrat"]=="Assurance habitation")
                                {
                                    echo "<option> Date effective : $ligne[dateEffet], Type de contrat : $ligne[type_contrat], Motif de départ : $ligne[motifDepart_Contrat], </br> Montant assurer : $ligne[montantMaxAssurer_Contrat], Degré d'assurance : $ligne[degreAssurance_Contrat], Ville du domicile : $ligne[villeDomicile], </br> Titulaire : $_SESSION[prenom] $_SESSION[nom], Référent : $ligne[nom_collaborateur] $ligne[prenom_collaborateur] </br></option>";
                                }
                                else
                                {
                                    echo "<option> Date effective : $ligne[dateEffet], Type de contrat : $ligne[type_contrat], Motif de départ : $ligne[motifDepart_Contrat], </br> Montant assurer : $ligne[montantMaxAssurer_Contrat], Degré d'assurance : $ligne[degreAssurance_Contrat], </br> Titulaire : $_SESSION[prenom] $_SESSION[nom], Référent : $ligne[nom_collaborateur] $ligne[prenom_collaborateur] </br></option>";
                                }
                            }
                        }
                        ?>
				</div>
			</div>
		</div>
	</div>
</section>