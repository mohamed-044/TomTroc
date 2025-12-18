<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Détail du livre'; ?></title>
    <link rel="stylesheet" href="/TomTroc/css/styles.css">
</head>
<body>
<?php include __DIR__ . '/header.php'; ?>

<section class="hero-section">
    <div class="hero-image-detail">
        <img id="detail_book_image" src="/TomTroc/img/hero_image.jpg" alt="Detail Book Image">
    </div>       
    <div class="hero-text">
        <h1 class="title">The Kinkfolk Table</h1>
        <p class="author"> Par: Nathan Williams</p>
        <img id="line" src="/TomTroc/img/line.png" alt="Line">
        <p class="little">DESCRIPTION</p>
        <p class="detail_description">J'ai récemment plongé dans les pages de 'The Kinfolk Table' et j'ai été enchanté par cette œuvre captivante. Ce livre va bien au-delà d'une simple collection de recettes ; il célèbre l'art de partager des moments authentiques autour de la table. 
        Les photographies magnifiques et le ton chaleureux captivent dès le départ, transportant le lecteur dans un voyage à travers des recettes et des histoires qui mettent en avant la beauté de la simplicité et de la convivialité. 
        Chaque page est une invitation à ralentir, à savourer et à créer des souvenirs durables avec les êtres chers. 
        'The Kinfolk Table' incarne parfaitement l'esprit de la cuisine et de la camaraderie, et il est certain que ce livre trouvera une place spéciale dans le cœur de tout amoureux de la cuisine et des rencontres inspirantes.</p>
        <p class="little">PROPRIETAIRE</p>
        <div class="owner-info">
            <img id="owner_image" src="/TomTroc/img/section_image.jpg" alt="Owner Image">
            <p class="owner_name">Alexlecture</p>
        </div>
        <a href="/TomTroc/views/templates/messages.php" class="cta-button4">Envoyer un message</a>
    </div>
         
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>