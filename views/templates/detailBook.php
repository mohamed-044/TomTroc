<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Détail du livre'; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<section class="hero-section">
    <div class="hero-image-detail">
        <img id="detail_book_image" src="./img/<?php echo htmlspecialchars($book->getImage() ?? ''); ?>" alt="Detail Book Image">
    </div>       
    <div class="hero-text">
        <h1 class="title"><?php echo htmlspecialchars($book->getTitle() ?? 'Titre inconnu'); ?></h1>
        <p class="author"> Par: <?php echo htmlspecialchars($book->getAuthor() ?? 'Auteur inconnu'); ?></p>
        <img id="line" src="./img/line.png" alt="Line">
        <p class="little">DESCRIPTION</p>
        <p class="detail_description"><?php echo htmlspecialchars($book->getDescription() ?? 'Description inconnue'); ?></p>
        <p class="little">PROPRIETAIRE</p>
        <div class="owner-info">
            <img id="owner_image" src="./img/<?php echo htmlspecialchars($book->getUserImage() ?? ''); ?>" alt="">
            <p class="owner_name"><?php echo htmlspecialchars($book->getUserName() ?? 'Propriétaire inconnu'); ?></p>
        </div>
        <a href="index.php?action=messages&id=<?php echo $book->getId(); ?>" class="cta-button4">Envoyer un message</a>
    </div>
         
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>