<!DOCTYPE html>
<?php
include_once("BDDASG.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/stylesactu.css" rel="stylesheet" />

</head>
<body class='css_actu'>
<?php
$chaineconnexion=connexionbdd();
// on appelle la fonction de récupération des contrat
$exec = recupactu($chaineconnexion);
while($ligne=mysqli_fetch_array($exec))
{
    echo "<option><h1>$ligne[titre_actu]</h1><br/>
    <table>
	<tr>
		<td><img src=assets/img/".$ligne['img_actu']." width ='300px'height ='250'></td>
		<td class='tablecontenue'>$ligne[contenue_actu]<br/>$ligne[mots_clé]<br/></br></td>	
	</tr>
	</table>
<br/><p class='ladate'>$ligne[date_actu]</p></br></br></option>";
}
?>
</body>
</html>