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
    <a href="/">Retour à l'accueil</a>
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>