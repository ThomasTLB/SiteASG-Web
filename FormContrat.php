<?php
include_once("BDDASG.php");
?>
<section class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner bg-faded text-center rounded">
                    <br/>
					<h2 class="section-heading mb-4">contrat </h2>
					<form  method="post" action="index.php?id=creerContratOk">                              
						<label>Date d’effet souhaité : </label><br/><input type="Date" name="dateEffet"placeholder="Entrez la date d'effet souhaité" required style="width: 65%;"/>
						<br/>
                        <br/>
                        <select name="typeContrat"placeholder="Entrez le type de contrat" required style="width: 65%; ">
                            <option>Assurance vie</option>
                            <option>Assurance en cas de décés</option>
                            <option>Assurance maladie</option>
                            <option>Assurance Travail</option>
                            <option>Assurance de tiers</option>
                            <option>Assurance Auto</option>
                            <option>Assurance de biens</option>
                            <option>Assurance habitation</option>
                            <option>Assurance perte d'exploitation</option>
                            <option>Assurance dommages ouvrage</option>
                            <option>Assurance décennale</option>
                            <option>Assurance tous risque chantier</option>
                            <option>Assurance RC Négociant Matériaux de constructions</option>
                            <option>Assurance RC fabricant Matériaux de constructions</option>
                        </select>
                        <br/>
                        <br/>
                        <label >Avez vous déjà un contrat: </label>
                        <br/>
                        <br/>
                        <label>oui :</label>
                        <input type="radio" name="dejaClient" required style="width: 65%;" value="1"/>
                        <br/>
                        <label>non:</label>
                        <input type="radio" name="dejaClient" style="width: 65%;" value="0" checke=true/>
                        <br/>
                        <br/>
                        <label >Avez vous déjà ete exclus d'une assurance : </label>
                        <br/>
                        <br/>
                        <label>oui   :</label>
                        <input type="radio" name="dejaExclus" required style="width: 65%;" value=1/>
                        <br/>
                        <label>non:</label>
                        <input type="radio" name="dejaExclus" style="width: 65%;" value=0/>
                        <br/>
                        <br/>     
                        <br/>                        
                        <label>Motif du départ: </label>
                        <br/>
                        <input type="text" name="motifDepart"placeholder="Entrez votre motif du départ" style="width: 65%;"/> 
                        <br/>
                        <br/>
                        <br/>
                        <label>Montant maximal à assurer : </label>
                        <br/>
                        <input type="tel" name="montantMaxAssurer"placeholder="Entrez votre montant maximal à assurer" required  style="width: 65%;"/>
                        <br/>
                        <br/>
                        <label>Degré d'assurance voulu </label>
                        <br/>
                        <input type="range" name="degreAssurance"  min="0" max="10" placeholder="Entrez votre degré d'assurance voulu" required style="width: 65%;"/>
                        <br/>
                        <br/>
                        <label>Marque de la voiture </label>
                        <br/>
                        <input type="tel" name="MarqueVoiture" list="marque_de_voiture"  style="width: 65%;"/>
                        <br/>
                        <br/>
                        <datalist name="marque_de_voiture" id="marque_de_voiture">
                            <option value="Citroen"></option>
                            <option value="Peugeot"></option>
                            <option value="Penault"></option>
                            <option value="Chevrolet"></option>
                            <option value="Cadilac"></option>
                            <option value="Buick"></option>
                            <option value="GMC"></option>
                            <option value="Dodge Chrysler"></option>
                            <option value="Lincoln"></option>
                            <option value="Scion"></option>
                            <option value="Dacia"></option>
                            <option value="Datsun"></option>
                            <option value="Nissan"></option>
                            <option value="Honda"></option>
                            <option value="Mazda"></option>
                            <option value="Mitsubishi"></option>
                            <option value="Subaru"></option>
                            <option value="Toyota"></option>
                            <option value="Fiat"></option>
                            <option value="Lancia "></option>
                            <option value=" Alfa Romeo"></option>
                            <option value="Maserati "></option>
                            <option value="Ferrari"></option>
                            <option value="Holden"></option>
                            <option value="Kia"></option>
                            <option value="Hyundai"></option>
                            <option value="lada"></option>
                            <option value="Opel"></option>
                            <option value="Volkswagen"></option>
                            <option value="Seat"></option>
                            <option value="Skoda"></option>
                            <option value="Vauxhall"></option>
                        </datalist>
                        <label>Ville du domicile à assurer :</label>
                        <br/> 
                        <input type="text" name="villeDomicile" list="ville" style="width: 65%;"/>
                        <datalist name="ville" id="ville">
                            <option value="Bagneux"></option>
                            <option value="Bourg-la-Reine"></option>
                            <option value="Chatillon"></option>
                            <option value="Clamart"></option>
                            <option value="Chatou"></option>
                            <option value="Montrouge"></option>
                            <option value="Meudon"></option>
                        </datalist>
                        <br/>
                        <br/>
                        <label>Prénom et nom du collaborateur : </label>
                        <br/> 
                        <select name="collaborateurSuivi"placeholder="Selectionner le collaborateur" required style="width: 65%; ">
                            <?php
                            { 
                                $chaineconnexion=connexionbdd();
                                $exec = recupdescollaborateurAffichage($chaineconnexion);
                                while($ligne=mysqli_fetch_array($exec))
                                {
                                   echo "<option value=\"$ligne[id_collaborateur]\">$ligne[prenom_collaborateur] $ligne[nom_collaborateur]</option>";
                                }
                            }
                            ?>
                        </select>
                        <br/>
                        <br/>
						<input type="submit" name="btnInscription" value="Inscription">
                        <br/>
                        <br/>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>