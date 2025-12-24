<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Échange de livres'; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>


<section class="exchange-books-section">
    <div class="top_section">
        <h1 class="title2">Nos livres à l'échange</h1>
        <div class="search-bar">
        <img id="union_image" src="./img/union.png" alt="Uninon Image">
        <input type="search" id="site-search" name="q" placeholder="Rechercher un livre"/>
        </div>
    </div>
    <div class="new-books">
        <?php
        $books = $books ?? [];
        // Remove debug after testing: echo '<pre>'; print_r($books); echo '</pre>';
        foreach ($books as $book): ?>
    <div class="card">
        <img class="card_image" src="./img/<?php echo htmlspecialchars($book->getImage() ?? 'hero_image.jpg'); ?>" alt="Card Image">
        <p class="card_title"><?php echo htmlspecialchars($book->getTitle() ?? 'Titre inconnu'); ?></p>
        <p class="card_author"><?php echo htmlspecialchars($book->getAuthor() ?? 'Auteur inconnu'); ?></p>
        <p class="card_user">Proposé par : <?php echo htmlspecialchars($book->getUserName() ?? 'Utilisateur inconnu'); ?></p> 
    </div>
    <?php endforeach; ?>
        </div>
    </div>

</section>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>