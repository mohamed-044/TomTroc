<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Editer'; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>
<section class="edit-book-section">
    <a class="back-link" href="index.php?action=account"><-retour</a>
    <h1 class="title7">Modifier les informations</h1>    
<div class="edit-book-container">
    <div class="edit-book-image">
        <p class="author">Photo</p>
        <img id="edit_book_image" src="./img/<?php echo htmlspecialchars($book->getImage() ?? ''); ?>" alt="Edit Book Image">
        <a href="index.php?action=editBookImage&id=<?= $book->getId() ?>" id="edit-book-link">Modifier la photo</a>
    </div>


    <form class="edit-book-form" action="index.php?action=updateBook" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $book->getId() ?>">

        <label class="author" >Titre</label>
        <input type="text" name="title" id="edit-title" value="<?= $book->getTitle() ?>">

        <label class="author" >Auteur</label>
        <input type="text" name="author" id="edit-author" value="<?= $book->getAuthor() ?>">

        <label class="author" >Commentaire</label>
        <textarea name="description" id="edit-description"><?= $book->getDescription() ?></textarea>

        <label class="author" >Disponibilité</label>
        <select name="status" id="edit-disponibility">
            <option value="true" <?= $book->getStatus() === "true" ? "selected" : "" ?>>Disponible</option>
            <option value="false" <?= $book->getStatus() === "false" ? "selected" : "" ?>>Indisponible</option>
        </select>

        <?php if (!empty($errors)) : ?>
        <div class="errorBox">
            <?php foreach ($errors as $error) : ?>
                <p><?= htmlspecialchars($error) ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <button type="submit" class="cta-button8">Valider</button>
    </form>

    
</div>
</section>
<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>