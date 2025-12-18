<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Inscription'; ?></title>
    <link rel="stylesheet" href="/TomTroc/css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<section class="connect-section">
    <div class="connect-content">
        <h1 class="title">Inscription</h1>
        <form class="connection-form" action="/TomTroc/index.php" method="post">
            <label class="author" for="pseudo">Pseudo</label>
            <input type="text" id="pseudo" name="pseudo" required>

            <label class="author" for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" required>

            <label class="author" for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="cta-button">S'inscrire</button>
        </form>
        <p class="signup-text">Déjà inscrit ? <a class="signup-link" href="/TomTroc/views/templates/connectionForm.php">Connectez-vous</a></p>
    </div>
    <img id="connect_image" src="/TomTroc/img/hero_image.jpg" alt="Hero Image">
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>