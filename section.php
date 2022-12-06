<?php
	//on va tester s'il existe un mot clé dans l'url
if (isset($_GET["id"]) && ($_GET["id"]!=""))
{//on récupère dans une varaible le mot clé contenu dans l'url
	$id=$_GET["id"];}
	else{//pour tous les autre cas on va définir accueil
		// comme étant le mot clé par défaut
		$id="accueil";}
//on va inclure dans notre partie centrale la page qui correspond au mot clé
// on va switcher en fonction de ce qui se trouve dans $id
switch($id)
{case "accueil" : include_once("accueil.php");
					break;
case "about" : include_once("about.php");
					break;
case "crew" : include_once("crew.php");
					break;
case "products" : include_once("products.php");
					break;
case "contact" : include_once("contact.php");
					break;
case "mention": include_once("mention.php");
                    break;
case "connexion": include_once("FormConnexion.php");
                    break;
case "connexionok": include_once("FormConnexion_ok.php");
                    break;
case "deconnexionok": include_once("deconnexionOk.php");
					break;
case "créerContrat": include_once("FormContrat.php");
					break;
case "creerContratOk": include_once("FormContrat_ok.php");
					break;
case "listContrat": include_once("listeContrat.php");
					break;
case "créerInscription": include_once("FormInscription.php");
					break;
case "créerInscriptionOk" : include_once("FormInscription_ok.php");
					break;
case "gestionAdmin" : include_once("admin.php");
					break;
case "creerActu" : include_once("creerActu.php");
					break;
case "suppActu" : include_once("suppActu.php");
					break;
default : include_once("accueil.php");
					break;
}
?>