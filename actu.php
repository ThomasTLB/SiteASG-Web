<!DOCTYPE html>
<?php
include_once("BDDASG.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<?php
$chaineconnexion=connexionbdd();
// on appelle la fonction de récupération des contrat
$exec = recupactu($chaineconnexion);
while($ligne=mysqli_fetch_array($exec))
{
    echo "<option> Titre : $ligne[titre_actu], Date de publication : $ligne[date_actu], Description : $ligne[contenu_actu], </br> Mots clés : $ligne[mots_clé], Image : $ligne[img_actu]";
}
?>
</body>
</html>