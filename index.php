<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TomTruc</title>
    <link rel="icon" type="image/png" href="img/icon.png">
    <link rel="stylesheet" href="/TomTroc/css/styles.css">
</head>
<body>
    <header>
    <nav class="navbar">
        <div class="left-nav">
            <a href="/TomTroc/index.php"><img src="/TomTroc/img/logo.svg" alt="Logo"></a>
            <div class="center-nav">
                <a href="/TomTroc/index.php" class="navlink">Accueil</a>
                <a href="/TomTroc/views/templates/exchangeBooks.php" class="navlink">Nos livres à l'échange</a>
            </div>
        </div>
        <div class="right-nav">
            <div>
                <img src="/TomTroc/img/icon_messagerie.svg" alt="Messagerie">
                <a href="/TomTroc/views/templates/messages.php" class="navlink">Messagerie</a>
            </div>
            <div>
                <img src="/TomTroc/img/icon_account.svg" alt="Compte">
                <a href="/TomTroc/views/templates/accountPage.php" class="navlink">Mon compte</a>
            </div>
            <div>
                <a href="/TomTroc/views/templates/login.php" class="navlink">Connexion</a>
            </div>
        </div>
    </nav>
    </header>
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="title">Rejoignez nos lecteurs passionnés </h1>
            <p class="description" >Donnez une nouvelle vie à vos livres en les échangeant avec d'autres amoureux de la lecture. Nous croyons en la magie du partage de connaissances et d'histoires à travers les livres. </p>
            <a href="/TomTroc/views/templates/exchangeBooks.php" class="cta-button">Découvrir</a>
        </div>
        <div class="hero-image">
            <img id="hero_image" src="/TomTroc/img/hero_image.jpg" alt="Hero Image">
            <p class="author_image">Hamza</p>
        </div>            
    </section>
    <section class="books-section">
        <h1 class="title2">Les derniers livres ajoutés</h1>
        <div class="new-books">
            <div class="card">
                <img class="card_image" src="/TomTroc/img/hero_image.jpg" alt="Card Image">
                <p class="card_title">Esther</p>
                <p class="card_author">Alabaster</p>
                <p class="card_user">Vendu par :</p>
            </div>
            <div class="card">
                <img class="card_image" src="/TomTroc/img/hero_image.jpg" alt="Card Image">
                <p class="card_title">Esther</p>
                <p class="card_author">Alabaster</p>
                <p class="card_user">Vendu par :</p>
            </div>
            <div class="card">
                <img class="card_image" src="/TomTroc/img/hero_image.jpg" alt="Card Image">
                <p class="card_title">Esther</p>
                <p class="card_author">Alabaster</p>
                <p class="card_user">Vendu par :</p>
            </div>
            <div class="card">
                <img class="card_image" src="/TomTroc/img/hero_image.jpg" alt="Card Image">
                <p class="card_title">Esther</p>
                <p class="card_author">Alabaster</p>
                <p class="card_user">Vendu par :</p>
            </div>
        </div>
        <a href="/TomTroc/views/templates/exchangeBooks.php" class="cta-button2">Voir tout les livres</a>
    </section>
    <section class="about-section">
        <h1 class="title2">Comment ça marche ?</h1>
        <p class="about-description">Échanger des livres avec TomTroc c’est simple et amusant ! Suivez ces étapes pour commencer :</p>
        <div class="about-content">
            <div class="card2">
                <p class="card_description">Inscrivez-vous gratuitement sur notre plateforme.</p>
            </div>
            <div class="card2">
                <p class="card_description">Inscrivez-vous gratuitement sur notre plateforme.</p>
            </div>
            <div class="card2">
                <p class="card_description">Inscrivez-vous gratuitement sur notre plateforme.</p>
            </div>
            <div class="card2">
                <p class="card_description">Inscrivez-vous gratuitement sur notre plateforme.</p>
            </div>
        </div>
        <a href="/TomTroc/views/templates/exchangeBooks.php" class="cta-button3">Voir tout les livres</a>
    </section>
    <section>
        <img class="image" src="/TomTroc/img/section_image.jpg" alt="Section Image">
    </section>
    <section class="about-section2">
        <div class="about-content2">
            <h1 class="title3">Nos valeurs</h1>
            <p class="about-description2">Chez Tom Troc, nous mettons l'accent sur le partage, la découverte et la communauté.
                Nos valeurs sont ancrées dans notre passion pour les livres et notre désir de créer des liens entre les lecteurs.
                Nous croyons en la puissance des histoires pour rassembler les gens et inspirer des conversations enrichissantes.</p>
            <p class="about-description2">Notre association a été fondée avec une conviction profonde : chaque livre mérite d'être lu et partagé.</p>
            <p class="about-description2">Nous sommes passionnés par la création d'une plateforme conviviale qui permet aux lecteurs de se connecter,
                de partager leurs découvertes littéraires et d'échanger des livres qui attendent patiemment sur les étagères.</p>
        </div>
        <div class="bottom-section">
            <p class="author_image2">L’équipe Tom Troc</p>
            <img class="heart_image" src="/TomTroc/img/heart.svg" alt="Heart">
        </div>
    </section>
    <section class="footer">
        <p class="footer-content">Politique de confidentialité</p>
        <p class="footer-content">Mentions légales</p>
        <p class="footer-content">Tom Troc©</p>
        <a href="/TomTroc/index.php"><img id="footer_image" src="/TomTroc/img/footer_image.png" alt="Footer Image"></a>
    </section>
</body>
</html>