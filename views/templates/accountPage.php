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
            <a class="modify-text">modifier</a>
            <img src="./img/line2.png" alt="Line Image">
            <p class="account-name"><?php echo htmlspecialchars($user->getName() ?? 'Utilisateur'); ?></p>
            <p class="account-info">Membre depuis 1 ans</p>
            <p class="little-text">BIBLIOTHEQUE</p>
            <div class="books-number"><img src="./img/books_icon.svg" alt="Books Icon"><p id="book-text">4 Livres</p></div>

        </div>
        <div class="account-actions">
            <p class="account-link">Vos informations personnelles</p>
            <form class="account-form" action="index.php" method="post">

            <label class="author" for="login">Adresse e-mail</label>
            <input type="login" id="login" name="login" class="account-input" required>

            <label class="author" for="password">Mot de passe</label>
            <input type="password" id="password" name="password" class="account-input" required>

            <label class="author" for="name">Pseudo</label>
            <input type="text" id="name" name="name" class="account-input" required>

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

  <div class="row">
    <div class="photo">
      <img src="/TomTroc/img/section_image.jpg" alt="Livre">
    </div>
    <div>The Kinfolk Table</div>
    <div>Nathan Williams</div>
    <div class="table-description">
      J'ai récemment plongé dans les pages de "The Kinfolk Table" et j'ai été enchanté p...
    </div>
    <div>
      <span class="badge available">disponible</span>
    </div>
    <div class="actions">
      <a href="#">Éditer</a>
      <a href="#" class="delete">Supprimer</a>
    </div>
  </div>

  <div class="row alt">
    <div class="photo">
      <img src="/TomTroc/img/section_image.jpg" alt="Livre">
    </div>
    <div>The Kinfolk Table</div>
    <div>Nathan Williams</div>
    <div class="table-description">
      J'ai récemment plongé dans les pages de "The Kinfolk Table" et j'ai été enchanté p...
    </div>
    <div>
      <span class="badge unavailable">non dispo.</span>
    </div>
    <div class="actions">
      <a href="#">Éditer</a>
      <a href="#" class="delete">Supprimer</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>