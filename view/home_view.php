<?php require('partials/head.php'); ?>

    <body>
        <div id="header">
            <nav>
                <a class="lien-logo" href="/"><h4 id="logo">WebComet</h4></a>

                <div id="menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>

            <span id="nav-link" class="invisible">
                <a href="webmaster-creation-site-vitrine">Création de site vitrine</a>
                <a href="consultant-seo">SEO</a>
            </span>

            <div id="header-container">
                <h1>Création de site web &amp;<br> Référencement naturel SEO à Rennes</h1>
                <div id="btnContact" class="newButton">Contact</div>
            </div>
        </div>

        <div class="separator-container">
            <span class="separator"></span>
            <span class="separator2"></span>
        </div>

        <main>
            <div class="box" id="box1">
                <span class="box-header">
                    <h2>Création de site web</h2>
                </span>
                <span class="box-main">
                    <img id="creation_site_web_img" src="public/images/creation_site_web.png" alt="Webmaster Pacé Rennes">
                    <div class="box-text">
                        <p>Vous avez trouvé le <strong>webmaster</strong> qu'il vous faut pour créer votre site vitrine</p>
                        <a class="newButton" href="/webmaster-creation-site-vitrine">En savoir plus</a>
                    </div>
                </span>
            </div>

            <div class="box">
                <span class="box-header">
                    <h2>Référencement naturel SEO</h2>
                </span>
                <span class="box-main">
                    <div class="box-text">
                        <p>Améliorer les positions de votre site web sur les moteurs de recherche</p>
                        <a class="newButton" href="/consultant-seo">En savoir plus</a>
                    </div>
                    <img id="seo_img" src="public/images/seo.png" alt="Consultant SEO Pacé Rennes">
                </span>
            </div>


            <div class="contact_box">
                <h2>Contactez-moi</h2>

                <p>Contactez-moi pour une demande de création de site web<br>
                ou d'optimisation de référencement naturel SEO</p>
                <?php require('partials/form.php'); ?>
            </div>
        </main>

        <?php require('partials/footer.php'); ?>
    </body>

    </html>