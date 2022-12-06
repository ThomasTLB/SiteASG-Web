<?php
include_once("BDDASG.php");
?>
<section class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner bg-faded text-center rounded">
                    <br/>
					<h2 class="section-heading mb-4">Gestion Administrateur</h2>
                    <h3 class="section-heading mb-4">Ajout d'actualité</h3>
					<form  method="post" action="index.php?id=creerActu" enctype="multipart/form-data">                        
                        <label>Titre de l'actualité</label>
                        <br/>
                        <input type="text" name="titre" placeholder="Titre" style="width: 65%;"/> 
                        <br/>
                        <br/>                          
						<label>Date de l'actualité</label><br/><input type="date" name="date" required style="width: 65%;"/>
                        <br/>
                        <br/>
                        <label>Texte de l'actualité</label>
                        <br/>
                        <input type="text" name="contenue" placeholder="Contenue du texte" style="width: 65%;"/>
                        <br/>
                        <br/>
                        <label>Mot clé</label>
                        <br/>
                        <input type="text" name="motcle" placeholder="mot clé" style="width: 65%;"/>
                        <br/>
                        <br/>
                        <label>Image de l'actualité</label>
                        <br/>
                        <input type="file" name="file" style="width: 65%"/>
                        <br/>
                        <br/>
						<input type="submit" name="btnAjout" value="Valider">
					</form>
                    <form method="post" action="index.php?id=suppActu">
                        <h3>Suppression d'actualité</h3>
                        <label>Titre et date de l'actualité</label>
                        <br/> 
                        <select name="actualiteChoisi" style="width: 65%; ">
                        <?php
                        { 
                            $chaineconnexion=connexionbdd();
                            $exec = recupactu($chaineconnexion);
                            while($ligne=mysqli_fetch_array($exec))
                            {
                                echo "<option value=\"$ligne[id]\">$ligne[titre_actu] $ligne[date_actu]</option>";
                            }
                        }
                        ?>
                        </select>
                        <br/>
                        <br/>
                        <input type="submit" name="btnSup" value="Suppression">
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>