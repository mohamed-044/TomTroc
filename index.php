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
            <img src="/TomTroc/img/logo.svg" alt="Logo">
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
            <p id="author_image">Hamza</p>
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
</body>
</html>