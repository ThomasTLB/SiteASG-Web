<?php session_start();

//connexion à la bdd --> la connexion renvoie une chaine de connexion
function connexionbdd()
{	// on précise à mysqliconnect l'adresse du serveur, l'utilisateur, le mot de passe utilisateur et le nom de la bdd
	$chaineconnexion=mysqli_connect("localhost", "root", "", "bdd_asg") or die("Message d'erreur");
	// on retourne la chaine de connexion pour s'en servir pour nos requete
	return $chaineconnexion;
}

// fonction de récupération des actualité
function insertionActu($titre, $dateActu, $contenue, $mot_clé, $file, $extension, $chaineconnexion)
{
	$requeteselect="INSERT into actualités (titre_actu, date_actu, contenue_actu, mots_clé, img_actu, extension_img) VALUES(\"$titre\", \"$dateActu\", \"$contenue\", \"$mot_clé\", \"$file\", \"$extension\")";
	$resultatselect=mysqli_query($chaineconnexion, $requeteselect);
	return $resultatselect;
}

function insertioninscrit($nom, $prenom, $login, $mdp, $cp, $age, $ddn, $telephone, $mail, $chaineconnexion)
{	// preparation de la requête
	$requeteinsertion="insert into collaborateur(nom_collaborateur, prenom_collaborateur, login_collaborateur, mdp_collaborateur, cp_collaborateur, age_collaborateur, ddn_collaborateur, telephone_collaborateur, mail_collaborateur, role_collaborateur) values (\"$nom\", \"$prenom\", \"$login\", \"$mdp\", \"$cp\", \"$age\", \"$ddn\", \"$telephone\", \"$mail\", \"visiteur\")";
	//on execute la requête auprès de mysql, on lui précise avec quelle chaine de connexion on fait l'execution
	$resultatinsert=mysqli_query($chaineconnexion, $requeteinsertion);
	//on retourne le resultat de l'insertion
	return $resultatinsert;
}

//fonction de récupération des collaborateur pour test de connexion
function recupdescollaborateur($login, $mdp, $chaineconnexion)
{	// on prépare le select
	$requeteselect="SELECT id_collaborateur, nom_collaborateur, prenom_collaborateur, role_collaborateur FROM `collaborateur` WHERE `login_collaborateur`=\"". $login."\" and `mdp_collaborateur`=\"".$mdp."\"";
	// on execute la requete auprès de mysql
	$resultatselect=mysqli_query($chaineconnexion, $requeteselect);
	$resultatRecup=mysqli_fetch_array($resultatselect);
	return $resultatRecup;
}

//fonction de récupération des collaborateur pour affichage
function recupdescollaborateurAffichage($chaineconnexion)
{
	$requeteselect="SELECT id_collaborateur, nom_collaborateur, prenom_collaborateur FROM `collaborateur` WHERE `role_collaborateur`=\"collaborateur\" ";
	$resultatselect=mysqli_query($chaineconnexion, $requeteselect);
	return $resultatselect;
}

//fonction d'insertion d'un nouveeau contrat
function insertioncontrat($dateEffet, $typeContrat, $dejaClient, $dejaExclus, $motifDepart, $montantMaxAssurer, $degreAssurance, $MarqueVoiture, $villeDomicile, $titulaireContrat, $collaborateurSuivi, $chaineconnexion)
{	// preparation de la requête
	$requeteinsertion="insert into contrats(dateEffet, type_contrat, déjaClient_Contrat, déjaExclus_Contrat, motifDepart_Contrat, montantMaxAssurer_Contrat, degreAssurance_Contrat, MarqueVoiture_Contrat, villeDomicile, titulaire_Contrat, CollaborateurSuivi_Contrat) values (\"$dateEffet\", \"$typeContrat\", \"$dejaClient\", \"$dejaExclus\", \"$motifDepart\", \"$montantMaxAssurer\", \"$degreAssurance\", \"$MarqueVoiture\", \"$villeDomicile\", \"$titulaireContrat\", \"$collaborateurSuivi\")";
	//on execute la requête auprès de mysql, on lui précise avec quelle chaine de connexion on fait l'execution
	$resultatinsert=mysqli_query($chaineconnexion, $requeteinsertion);
	//on retourne le resultat de l'insertion
	return $resultatinsert;
}

//fonction d'update des client
function updateNewClient($chaineconnexion)
{	// preparation de la requête
	$requeteUpdate="UPDATE `collaborateur` SET `role_collaborateur` = \"nouveau client\" WHERE id_collaborateur =\"".$_SESSION["id"]."\"";
	// on execute la requete auprès de mysql, on lui précise avec quelle chaine de connexion on fait l'execution
	$resultatUpdate=mysqli_query($chaineconnexion, $requeteUpdate);
	// on retourne le resultat de l''update
	return $resultatUpdate;
}
function updateAlreadyClient($chaineconnexion)
{	// preparation de la requête
	$requeteUpdate="UPDATE `collaborateur` SET `role_collaborateur` = \"déjà Client\" WHERE id_collaborateur =\"".$_SESSION["id"]."\"";
	// on execute la requete auprès de mysql, on lui précise avec quelle chaine de connexion on fait l'execution
	$resultatUpdate=mysqli_query($chaineconnexion, $requeteUpdate);
	// on retourne le resultat de l''update
	return $resultatUpdate;
}
//fonction de recupération des contrats
function recupdesContrats($chaineconnexion)
{	// on prépar le select
	$requeteselect="SELECT nom_collaborateur, prenom_collaborateur, dateEffet, type_contrat, déjaClient_Contrat, déjaExclus_Contrat, motifDepart_Contrat, montantMaxAssurer_Contrat, degreAssurance_Contrat, MarqueVoiture_Contrat, villeDomicile, titulaire_Contrat, CollaborateurSuivi_Contrat FROM `contrats` JOIN `collaborateur` on contrats.CollaborateurSuivi_Contrat=collaborateur.id_collaborateur WHERE `titulaire_Contrat`=\"".$_SESSION["id"]."\"";
	$resultatselect=mysqli_query($chaineconnexion, $requeteselect);
	return $resultatselect;
}
//fonction de récupération des inscrit
function recupdesinscrits($chaineconnexion)
{	// on prépare le select
	$requeteselect="select prenom_collaborateur, nom_collaborateur, age_collaborateur, ddn_collaborateur, telephone_collaborateur, mail_collaborateur, mdp_collaborateur, cp_collaborateur, login_collaborateur from collaborateur";
	// on execute la requete auprès de mysql
	$resultatselect=mysqli_query($chaineconnexion, $requeteselect);
		echo "<table border=\"1\">";
	// on va lire le tableau de résultats ligne par ligne tant qu'il y a des ligne
	while($ligne=mysqli_fetch_array($resultatselect))
	// on va exploiter les différentes colonnes de la ligne de résultats
	{	echo "<tr><td>$ligne[0]</td><td>$ligne[1]</td><td>$ligne[3]</td><td>$ligne[2]</td></tr>";
	
	}
	echo "<table/>";
}
// fonction de récupération des actualité
function recupactu($chaineconnexion)
{
	$requeteselect="SELECT titre_actu, date_actu, contenue_actu, mots_clé, img_actu FROM actualités";
	$resultatselect=mysqli_query($chaineconnexion, $requeteselect);
	return $resultatselect;
}
// fonction de suppression des actualiter
function suppActu($actualiteChoisi, $chaineconnexion)
{
	$requetedelete="DELETE FROM 'actualités' WHERE 'id'=\"".$actualiteChoisi."\"";
	$resultatdelete=mysqli_query($chaineconnexion, $requetedelete);
	return $resultatdelete;
}
?>