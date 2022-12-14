<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Pour nous contacter</span>
                        <span class="section-heading-lower">Vous pouvez venir nous voir</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Agence de Bagneux
                            <span class="ms-auto">21 rue de la lisette 92220 Bangneux</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Agence de Bailleul 
                            <span class="ms-auto"> 240 Rue de Lille, 59270 Bailleul</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Agence de Granville
                            <span class="ms-auto">4 place Cambernon, 50400 Granville</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Agence de Montigny	
                            <span class="ms-auto">2 rue de la montagne 45170 Montigny</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Agence de Saint Jean de Vedas
                            <span class="ms-auto">31 avenue Georges Clemenceau, 34400 Saint Jean de Vedas</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Agence de Maillezais
                            <span class="ms-auto">39 rue du grand port, 85440 Maillezais</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Agence de Frangy
                            <span class="ms-auto">72 rue Haute 74270 Frangy</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>Vous pouvez aussi utiliser le formulaire suivant</strong>
                            <br />
                            Remplissez tous les champs 
                        </em>
                    </p>
                    <form method="post" action="index.php?id=contact" align='center'>
                        <label>E-mail :</label>
                         <input type="E-mail" id="email" name="email"/>
                        <label> Votre message :</label>
                         <textarea id="message" name="message"></textarea>
                         <input type="submit" name="valider">
                    </form>
                    <script>
                    document.forms[0].addEventListener("submit", function(evenement) { 
                    if (document.getElementById("email").value == "") {
                        evenement.preventDefault();
                        alert("Tapez un email valable pour avoir une réponse.");
                        document.getElementById("email").focus();
                 }
                    else if (document.getElementById("message").value == "") {
                     evenement.preventDefault();
                    alert("Pensez à taper un message !");
                        document.getElementById("message").focus();
                 }
                    else 
                    alert("Merci de nous avoir contacter !");
                    });
                    </script>
                    <?php 
                    if (isset($_POST['valider'])&&($_POST['valider']!=''))
                    {
                        $email=($_POST["email"]);
                        $message=($_POST["message"]);

                        $chainedeconnexion=connexionbdd();

                      insertioncontact($email, $message, $chainedeconnexion);
                    }
                      ?>
                    <p class="mb-0">
                        <small><em>Pour nous appeler </em></small>
                        <br />
                        0146576122
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>