<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Connexion'; ?></title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<section class="connect-section">
    <div class="connect-content">
        <h1 class="title">Connexion</h1>
        <form class="connection-form" action="./index.php" method="post">
            <label class="author" for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" required>

            <label class="author" for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="cta-button">Se connecter</button>
        </form>
        <p class="signup-text">Pas encore de compte ? <a class="signup-link" href="./views/templates/registrationForm.php">Inscrivez-vous</a></p>
    </div>
    <img id="connect_image" src="./img/hero_image.jpg" alt="Hero Image">
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>