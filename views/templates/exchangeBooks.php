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
        foreach ($books as $book): ?>
    <div class="card">
        <img class="card_image" src="./img/<?php echo htmlspecialchars($book->getImage() ?? 'hero_image.jpg'); ?>" alt="Card Image">
        <a class="card_title" href="index.php?action=bookDetails&id=<?php echo $book->getId(); ?>"><p><?php echo htmlspecialchars($book->getTitle() ?? 'Titre inconnu'); ?></p></a>
        <p class="card_author"><?php echo htmlspecialchars($book->getAuthor() ?? 'Auteur inconnu'); ?></p>
        <a class="card_user" href="index.php?action=profile&id=<?php echo $book->getUserId(); ?>">Proposé par : <?php echo htmlspecialchars($book->getUserName() ?? 'Utilisateur inconnu'); ?></a> 
    </div>
    <?php endforeach; ?>
    </div>

</section>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>