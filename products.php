<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ms-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">Assurances vie, santé, auto, habitation...</span>
                        <span class="section-heading-lower">Nous sommes là pour prévenir et assurer vos biens, votre famille, et vous-même</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-01.jpg" alt="..." />
            <div class="product-item-description d-flex me-auto">
                <div class="bg-faded p-5 rounded"><p class="mb-0"></p></div>
            </div>
        </div>
    </div>
</section>
<div class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner bg-faded text-center rounded">
					<h2 class="section-heading mb-4">Nos contrats</h2>
                    <h3>Assurance de personnel</h3>
                    <p>Assurance-vie, Assurance-en cas de décés, Assurance maladie, Assurance travail</p>
                    <h3>Assurance de dommages</h3>
                    <p>Assurance de tiers, Assurance de biens, Assurance perte d'exploitation</p>
                    <h3>Assurance de constructions</h3>
                    <p>Assurance dommages ouvrage, Assurance décennale en france, Assurance tous risques chantier, Assurance RC Négociant Materiaux de constructions, Assurance RC Fabricant Matériaux de constructions</p>
                    <?php
                    if(isset($_SESSION["id"]))
                    {?>
                        <p><a class="nav-link text-uppercase" href="index.php?id=créerContrat">Souscrire à un abbonement</a></p>
                        <?php
                    }?>
                    <?php
                    if(isset($_SESSION["id"]))
                    {?>
                        <p><a class="nav-link text-uppercase" href="index.php?id=listContrat">Liste des contrats</a></p>
                    <?php
                    }
                    ?>
                </div>
			</div>
		</div>
	</div>
</div>
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex me-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">Assurance solidaire</span>
                        <span class="section-heading-lower">Nos tarifs sont des plus accessibles</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-02.jpg" alt="..." />
            <div class="product-item-description d-flex ms-auto">
                <div class="bg-faded p-5 rounded"><p class="mb-0">Assureur mutualiste de l’économie solidaire, Saint-Gabriel met à la disposition de ses sociétaires une expertise, une capacité d’écoute et une volonté d’innovation reconnues</p></div>
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ms-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">Plus de 75 ans d'expertise</span>
                        <span class="section-heading-lower">N°1 de l'économie solidaire</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-03.jpg" alt="..." />
            <div class="product-item-description d-flex me-auto">
                <div class="bg-faded p-5 rounded"><p class="mb-0">TForte d’une expertise reconnue découlant de plus de soixante quinze ans d’amélioration et d’enrichissement de ses savoir-faire, elle propose à ces institutions, à leurs salariés et à leurs bénévoles des garanties, des services d’assurances et un accompagnement adaptés à leur mission, au meilleur coût.</p></div>
            </div>
        </div>
    </div>
</section>