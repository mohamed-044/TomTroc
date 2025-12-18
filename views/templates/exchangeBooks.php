<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Échange de livres'; ?></title>
    <link rel="stylesheet" href="/TomTroc/css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>


<section class="exchange-books-section">
    <div class="top_section">
        <h1 class="title2">Nos livres à l'échange</h1>
        <div class="search-bar">
        <img id="union_image" src="/TomTroc/img/union.png" alt="Uninon Image">
        <input type="search" id="site-search" name="q" placeholder="Rechercher un livre"/>
        </div>
    </div>
    <div class="new-books">
        <div class="card">
            <img class="card_image" src="/TomTroc/img/hero_image.jpg" alt="Card Image">
            <p class="card_title">Esther</p>
            <p class="card_author">Alabaster</p>
            <p class="card_user">Proposé par :</p>
        </div>
        <div class="card">
            <img class="card_image" src="/TomTroc/img/hero_image.jpg" alt="Card Image">
            <p class="card_title">Esther</p>
            <p class="card_author">Alabaster</p>
            <p class="card_user">Proposé par :</p>
        </div>
        <div class="card">
            <img class="card_image" src="/TomTroc/img/hero_image.jpg" alt="Card Image">
            <p class="card_title">Esther</p>
            <p class="card_author">Alabaster</p>
            <p class="card_user">Proposé par :</p>
        </div>
        <div class="card">
            <img class="card_image" src="/TomTroc/img/hero_image.jpg" alt="Card Image">
            <p class="card_title">Esther</p>    
            <p class="card_author">Alabaster</p>
            <p class="card_user">Proposé par :</p>
        </div>
    </div>

</section>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>