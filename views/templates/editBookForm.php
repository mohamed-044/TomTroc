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

<div class="edit-book-container">
    <h2>Modifier le livre</h2>

    <form class="edit-book-form" action="index.php?action=updateBook" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $book->getId() ?>">

        <label>Titre</label>
        <input type="text" name="title" value="<?= $book->getTitle() ?>">

        <label>Auteur</label>
        <input type="text" name="author" value="<?= $book->getAuthor() ?>">

        <label>Description</label>
        <textarea name="description"><?= $book->getDescription() ?></textarea>

        <label>Disponibilité</label>
        <select name="status">
            <option value="true" <?= $book->getStatus() === "true" ? "selected" : "" ?>>Disponible</option>
            <option value="false" <?= $book->getStatus() === "false" ? "selected" : "" ?>>Indisponible</option>
        </select>

        <button type="submit">Enregistrer</button>
    </form>

    <a class="back-link" href="index.php?action=account">Retour</a>
</div>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>