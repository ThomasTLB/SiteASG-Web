<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    
							<h2 class="section-heading mb-4">Formulaire d'inscription </h2>
                            <div id="col">
								<form class="FD" method="post" action="index.php?id=créerInscriptionOk">
								<label >Prenom : </label><input type="text" name="prenom_collaborateur" required />
								<br/>
								 <br/>                               
								<label>Nom : </label><input type="text" name="nom_collaborateur"required/>
								<br/>
								<br/>
                            
                                <label>Age : </label><input type="text" name="age_collaborateur"required/>
                                <br/>
                                 <br/>
                                 
                                <label>Date de naissance : </label><input type="date" name="ddn_collaborateur"required/>
                                
                                <br/>
                                 <br/>
                                <div id="col">
                                    
                                <label align="text-center">Téléphone : </label> <input type="tel" name="telephone_collaborateur"required/>
                                <br/>
                                <br/>
                                
                                </div>
                               
                                <label >Adresse mail : </label><input type="email" name="mail_collaborateur"required/>
                                <br/>
                                 <br/>                             
                                <label>Code postal : </label> <input type="text" name="cp_collaborateur" pattern="[0-9]{5}" maxlength="5"  required /> 
                                
                                  <br/>
                                   <br/>
                                 
                               
                                 <label>Identifiant : </label> <input type="Login" name="login_collaborateur" required />
                                 <br/>
                                <br/>

                                  <label>Mot de passe : </label> <input type="password" name="mdp_collaborateur"required/>
                                   <br/>
                                    <br/>
                                     <br/>

                                     </div>
                                     <br/>
                                 </br>
								<input type="submit" name="btnInscription" value="Inscription">
                                </table>
							</form>
					   </form>
                </div>
            </div>
        </div>
    </div>
</section>