<?php
include_once("BDDASG.php");
?>
<section class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner bg-faded text-center rounded">
                    <?php
                        $titre=$_POST["titre"];
                        $dateActu=$_POST["date"];
                        $contenue=$_POST["contenue"];
                        $mot_clé=$_POST["motcle"];
                        $tmpName=$_FILES["file"]["tmp_name"];
                        $name=$_FILES["file"]["name"];
                        $size=$_FILES["file"]["size"];
                        $error=$_FILES["file"]["error"];
                        $maxSize=400000;
                        $tabExtension=explode(".", $name);
                        $extension=strtolower(end($tabExtension));
                        $extensions=["jpg", "png", "jpeg", "gif"];
                        $chaineconnexion=connexionbdd();
                        if(in_array($extension, $extensions) && ($size <= $maxSize && $error == 0))
                        {
                            $uniqueName = uniqid("", true);
                            $file = $uniqueName.".".$extension;
                            move_uploaded_file($tmpName, "./assets/img/".$file);
                            $resultatinsertion = insertionActu($titre, $dateActu, $contenue, $mot_clé, $file, $extension, $chaineconnexion);
                        }
                        else
                        {
                            echo "Une erreur est survenue";
                        }
                        if ($resultatinsertion>=1)
   		                {   
                            echo  "L'actualité a été ajouter";
                            echo"<meta http-equiv='refresh' content='5; URL=index.php?id=gestionAdmin'>";
                        }
                        else 
                        {   
                            echo "l'ajout de l'actualité a echouer, veuillez recommencez";
                            echo"<meta http-equiv='refresh' content='5; URL=index.php?id=creerActu'> ";
                        }
                    ?>
				</div>
			</div>
		</div>
	</div>
</section>