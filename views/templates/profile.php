<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Profil'; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>
<section class="account-section2">
<div class="account-content2">
            <img id="account_image" src="./img/<?php echo htmlspecialchars($user->getImage() ?? './img/default_user_image.jpg'); ?>" alt="Account Image">
            <a class="modify-text" href="index.php?action=updateImage">modifier</a>
            <img src="./img/line2.png" alt="Line Image">
            <p class="account-name"><?php echo htmlspecialchars($user->getName() ?? 'Nom inconnu'); ?></p>
            <p class="account-info">Membre depuis <?php echo $user->getJoinDate() ?? 'Inconnue'; ?> ans</p>
            <p class="little-text">BIBLIOTHEQUE</p>
            <div class="books-number"><img src="./img/books_icon.svg" alt="Books Icon"><p id="book-text"><?php echo count($books); ?> Livres</p></div>
            <button type="submit" class="cta-button5">Ecrire un message</button>
</div>

<section class="table2">
  <div class="row2 table2-header">
    <div>Photo</div>
    <div>Titre</div>
    <div>Auteur</div>
    <div>Description</div>
  </div>

<?php foreach ($books as $book): ?>
    <?php $status = strtolower(trim($book->getStatus())); ?>

    <?php if ($status === 'true'): ?>
        <div class="row2">
            <div class="photo">
                <img src="./img/<?php echo htmlspecialchars($book->getImage()); ?>" alt="Livre">
            </div>
            <div><?php echo htmlspecialchars($book->getTitle()); ?></div>
            <div><?php echo htmlspecialchars($book->getAuthor()); ?></div>
            <div class="table2-description">
                <?php echo htmlspecialchars(substr($book->getDescription(), 0, 50) . '...'); ?>
            </div>
        </div>

    <?php else: ?>
        <div class="row2 alt">
            <div class="photo">
                <img src="./img/<?php echo htmlspecialchars($book->getImage()); ?>" alt="Livre">
            </div>
            <div><?php echo htmlspecialchars($book->getTitle()); ?></div>
            <div><?php echo htmlspecialchars($book->getAuthor()); ?></div>
            <div class="table2-description">
                <?php echo htmlspecialchars(substr($book->getDescription(), 0, 50) . '...'); ?>
            </div>
        </div>
    <?php endif; ?>

<?php endforeach; ?>

</section>
</section>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>