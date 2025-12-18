<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Profil'; ?></title>
    <link rel="stylesheet" href="/TomTroc/css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>
<section class="account-section2">
<div class="account-content2">
            <img id="account_image" src="/TomTroc/img/section_image.jpg" alt="Account Image">
            <a class="modify-text">modifier</a>
            <img src="/TomTroc/img/line2.png" alt="Line Image">
            <p class="account-name">nathalire</p>
            <p class="account-info">Membre depuis 1 ans</p>
            <p class="little-text">BIBLIOTHEQUE</p>
            <div class="books-number"><img src="/TomTroc/img/books_icon.svg" alt="Books Icon"><p id="book-text">4 Livres</p></div>
            <button type="submit" class="cta-button5">Ecrire un message</button>
</div>

<section class="table2">
  <div class="row2 table2-header">
    <div>Photo</div>
    <div>Titre</div>
    <div>Auteur</div>
    <div>Description</div>
  </div>

  <div class="row2">
    <div class="photo">
      <img src="/TomTroc/img/section_image.jpg" alt="Livre">
    </div>
    <div>The Kinfolk Table</div>
    <div>Nathan Williams</div>
    <div class="table2-description">
      J'ai récemment plongé dans les pages de "The Kinfolk Table" et j'ai été enchanté p...
    </div>
  </div>

  <div class="row2 alt">
    <div class="photo">
      <img src="/TomTroc/img/section_image.jpg" alt="Livre">
    </div>
    <div>The Kinfolk Table</div>
    <div>Nathan Williams</div>
    <div class="table2-description">
      J'ai récemment plongé dans les pages de "The Kinfolk Table" et j'ai été enchanté p...
    </div>
  </div>
</section>
</section>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>