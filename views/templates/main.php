<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<section class="hero-section">
    <div class="hero-content">
        <h1 class="title">Rejoignez nos lecteurs passionnés </h1>
        <p class="description" >Donnez une nouvelle vie à vos livres en les échangeant avec d'autres amoureux de la lecture. Nous croyons en la magie du partage de connaissances et d'histoires à travers les livres. </p>
        <a href="index.php?action=books" class="cta-button">Découvrir</a>
    </div>
    <div class="hero-image">
        <img id="hero_image" src="./img/hero_image.jpg" alt="Hero Image">
        <p class="author_image">Hamza</p>
    </div>            
</section>
<section class="books_section">
    <h1 class="title2">Les derniers livres ajoutés</h1>
    <div class="new-books">
        <?php
        $books = $books ?? [];
        foreach ($books as $book): ?>
        <div class="card">
            <img class="card_image" src="./img/<?php echo htmlspecialchars($book->getImage() ?? 'hero_image.jpg'); ?>" alt="Card Image">
            <a class="card_title" href="index.php?action=bookDetails&id=<?php echo $book->getId(); ?>"><p><?php echo htmlspecialchars($book->getTitle() ?? 'Titre inconnu'); ?></a></p>
            <p class="card_author"><?php echo htmlspecialchars($book->getAuthor() ?? 'Auteur inconnu'); ?></p>
            <a class="card_user" href="index.php?action=profile&id=<?php echo $book->getUserId(); ?>">Proposé par : <?php echo htmlspecialchars($book->getUserName() ?? 'Utilisateur inconnu'); ?></a> 
        </div>
        <?php endforeach; ?>
    </div>
    <a href="index.php?action=books" class="cta-button2">Voir tout les livres</a>
</section>
<section class="about-section">
    <h1 class="title2">Comment ça marche ?</h1>
    <p class="about-description">Échanger des livres avec TomTroc c’est simple et amusant ! Suivez ces étapes pour commencer :</p>
    <div class="about-content">
        <div class="card2">
            <p class="card_description">Inscrivez-vous gratuitement sur notre plateforme.</p>
        </div>
        <div class="card2">
            <p class="card_description">Ajoutez les livres que vous souhaitez échanger à votre profil.</p>
        </div>
        <div class="card2">
            <p class="card_description">Parcourez les livres disponibles chez d'autres membres.</p>
        </div>
        <div class="card2">
            <p class="card_description">Proposez un échange et discutez avec d'autres passionnés de lecture.</p>
        </div>
    </div>
    <a href="index.php?action=books" class="cta-button3">Voir tout les livres</a>
</section>
<section>
    <img class="image" src="./img/section_image.jpg" alt="Section Image">
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
        <img class="heart_image" src="./img/heart.svg" alt="Heart">
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>