<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Erreur'; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<section class="error-section">
    <h1 class="title2">Erreur</h1>
    <p><?php echo $message ?? 'Une erreur est survenue.'; ?></p>
    <?php if (!empty($errors)) : ?>
    <div class="errorBox">
        <?php foreach ($errors as $error) : ?>
            <p><?= htmlspecialchars($error) ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <a class="cta-button9" href="index.php">Retour à l'accueil</a>
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>