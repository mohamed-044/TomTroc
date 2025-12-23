<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Modifier le livre'; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<section class="edit-section">
    <a class="author" id="back" href="./views/templates/exchangeBooks.php">&#8592; Retour</a>
    <h1 class="title5">Modifier les informations</h1>
    <div class="edit-content">
        <div class="edit-image">
        <label class="author" for="book_image" id="book_image">Photo</label>
        <img id="edit_book_image" src="./img/hero_image.jpg" alt="Detail Book Image">
        <a class="edit-link" href="#">Modifier la photo</a>
        </div>

        <div class="account-actions">
            <form class="account-form" action="index.php" method="post">

            <label class="author" for="title">Titre</label>
            <input type="text" id="title" name="title" class="account-input" required>

            <label class="author" for="author">Auteur</label>
            <input type="text" id="author" name="author" class="account-input" required>

            <label class="author" for="description">Description</label>
            <input id="description" name="description" class="account-input" required>

            <label class="author" for="disponibility">Disponibilité</label>
            <select name="disponibility " id="disponibility" class="account-input">
            <option value="disponible">disponible</option>
            <option value="indisponible" selected>indisponible</option>
            </select>

            <button type="submit" class="cta-button6">Valider</button>
            </form>
        </div>
    </div>    
</section>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>