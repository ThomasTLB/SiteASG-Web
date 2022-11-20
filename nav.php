<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">St GABRIEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto" id="connecter">
                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Accueil</a></li>
                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php?id=about">Nos activités</a></li>
                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php?id=products">Nos contrats</a></li>
                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php?id=crew">Nos équipes</a></li>
			    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php?id=contact">Nous contacter</a></li>
                <?php
                if(!isset($_SESSION["nom"]))
                {
                    ?>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php?id=connexion#connecter">Se connecter</a></li>
                    <?php
                }
                else
                {
                    ?>
                    <form action="index.php?id=deconnexionok#deconnecter" method="post">
                    <li class="nav-item px-lg-4"><input type ="submit" name="deco" value="Se déconnecter"/></li>
                    </form>
                    <?php
                    echo "Bienvenue  ". $_SESSION["prenom"]." ". $_SESSION["nom"]." ". $_SESSION["rôle"];
                    if(($_SESSION["rôle"])=="Administrateur")
                    {
                        ?>
                            <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php?id=gestionAdmin">Gestion Admin</a></li>
                        <?php
                    }
                }
	            ?>
            </ul>
        </div>
    </div>
</nav>