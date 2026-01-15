<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Mon Compte'; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<section class="account-section">
    <h1 class="title5">Mon Compte</h1>
    <?php if (isset($user)): ?>
    <div class="infos-section">
        <div class="account-content">
            <img id="account_image" src="./img/<?php echo htmlspecialchars($user->getImage() ?: 'section_image.jpg'); ?>" alt="Account Image">
            <a class="modify-text" href="index.php?action=updateImage">modifier</a>
            <img src="./img/line2.png" alt="Line Image">
            <p class="account-name"><?php echo htmlspecialchars($user->getName() ?? 'Utilisateur'); ?></p>
            <p class="account-info">Membre depuis <?php echo $user->getJoinDate() ?? 'Inconnue'; ?> ans</p>
            <p class="little-text">BIBLIOTHEQUE</p>
            <div class="books-number"><img src="./img/books_icon.svg" alt="Books Icon"><p id="book-text"><?php echo count($books); ?> Livres</p></div>

        </div>
        <div class="account-actions">
            <p class="account-link">Vos informations personnelles</p>
            <form class="account-form" action="index.php?action=updateAccount" method="post">

            <label class="author" for="login">Adresse e-mail</label>
            <input type="text" id="login" name="login" class="account-input"
                  value="<?= htmlspecialchars($user->getLogin()) ?>">

            <label class="author" for="password">Mot de passe</label>
            <input type="password" id="password" name="password" class="account-input"
                  value="<?= htmlspecialchars($user->getPassword()) ?>">

            <label class="author" for="name">Pseudo</label>
            <input type="text" id="name" name="name" class="account-input"
                  value="<?= htmlspecialchars($user->getName()) ?>">

            <button type="submit" class="cta-button3">Enregistrer</button>
            </form>
        </div>
    </div>
</section>
<?php endif; ?>
<section class="table">
  <div class="row table-header">
    <div>Photo</div>
    <div>Titre</div>
    <div>Auteur</div>
    <div>Description</div>
    <div>Disponibilité</div>
    <div>Action</div>
  </div>

  <?php foreach ($books as $book): ?>

    <?php 

        $rowClass = ($book->getStatus() === 'true') ? 'row' : 'row alt';
    ?>

    <div class="<?= $rowClass ?>">
        <div class="photo">
            <img src="./img/<?= htmlspecialchars($book->getImage()) ?>" alt="Livre">
        </div>

        <div><?= htmlspecialchars($book->getTitle()) ?></div>

        <div><?= htmlspecialchars($book->getAuthor()) ?></div>

        <div class="table-description">
            <?= htmlspecialchars(substr($book->getDescription(), 0, 100)) ?>...
        </div>

        <div>
            <?php if ($book->getStatus() === 'true'): ?>
                <span class="badge available">disponible</span>
            <?php else: ?>
                <span class="badge unavailable">indisponible</span>
            <?php endif; ?>
        </div>

        <div class="actions">
            <a href="index.php?action=editBook&id=<?php echo $book->getId(); ?>">Éditer</a>
            <a href="index.php?action=deleteBook&id=<?php echo $book->getId(); ?>" class="delete">Supprimer</a>
        </div>
    </div>
    
<?php endforeach; ?>


</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>