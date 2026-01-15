<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Mettre à jour l\'image'; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>
<section class="update-image-section">
    <div class="update-image-content">
        <h1 class="title">Mettre à jour l'image de livre</h1>
        <form class="update-image-form" action="index.php?action=updateBookImage&id=<?php echo $book->getId(); ?>" method="post" enctype="multipart/form-data">
            <label class="author" for="image">Choisir une nouvelle image de livre</label>
            <input type="file" id="image-update" name="image" accept="image/*">
            <button type="submit" class="cta-button">Mettre à jour l'image</button>
        </form>
    </div>
</section>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>