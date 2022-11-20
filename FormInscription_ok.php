<?php include_once("BDDASG.php") ?>
<section class="page-section cta">
   <div class="container">
      <div class="row">
         <div class="col-xl-9 mx-auto">
            <div class="cta-inner bg-faded text-center rounded">
               <h2 class="section-heading mb-4">Inscription</h2>
<?php 

   $prenom_collaborateur=($_POST['prenom_collaborateur']);
   $nom_collaborateur=($_POST['nom_collaborateur']);
   $age_collaborateur=($_POST['age_collaborateur']);
   $ddn_collaborateur=($_POST['ddn_collaborateur']);
   $telephone_collaborateur=($_POST['telephone_collaborateur']);
   $mail_collaborateur=($_POST['mail_collaborateur']);
   $cp_collaborateur=($_POST['cp_collaborateur']);
   $login_collaborateur=($_POST['login_collaborateur']);
   $mdp_collaborateur=($_POST['mdp_collaborateur']);

   $chainedeconnexion=connexionbdd();

   $resultatinsertion=insertioninscrit($nom_collaborateur, $prenom_collaborateur, $login_collaborateur, $mdp_collaborateur, $cp_collaborateur, $age_collaborateur, $ddn_collaborateur, $telephone_collaborateur, $mail_collaborateur, $chainedeconnexion);
   if ($resultatinsertion> 0)
   		{   echo  " votre inscription a été pris en compte (Vous allez être redirigé)";

            echo"<meta http-equiv='refresh' content='5; URL=index.php?id=connexion'>";
         }
  else 
         {  echo "votre inscription à échoué, veuillez compléter tous les champs (Vous allez être redirigé)";

            echo"<meta http-equiv='refresh' content='5; URL=index.php?id=créerInscription'> ";
         }
   ?>
</div>
         </div>
      </div>
   </div>
</section>