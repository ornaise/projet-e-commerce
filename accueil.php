<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->
    <link rel="stylesheet" href="site.css">
    
    <title>site e-commerce</title>
</head>

<body>
    <header>
        <nav>

            <label for="toggle" style=" display: none; ">☰</label>
            <input type="checkbox" id="toggle">
            <div class="main_pages">
                <a href="#">Accueil</a>
                <a href="#">Actualité</a>
                <a href="contact.html">Contact</a>
                <a href="#">Urgence</a>
                <a href="#">Service</a>
                <a href="proprietaire.html">client</a>

            </div>
        </nav>
       
    </header>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 2</div>
            <img src="Princesse au pré.png" style="width:100%">
            <div class="text">Princesse au repos , journée tranquille .</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 2</div>
            <img src="princesse fait un selfie.png" style="width:100%">
            <div class="text">Princesse adore les selfies </div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div class="container">
        <h2>présentation</h2>
        <p>.....................</p>
       
        <img class="image" src="chevaux.png" alt='chevaux' align='right'>
        
    </div>
    <?php
// Obtenez les 4 services récemment ajoutés 
$stmt = $pdo->prepare('SELECT * FROM service1 ORDER BY date_ajou DESC LIMIT 4');
$stmt->execute();
$recently_added_service1 = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>

<?= template_header('Home') ?>
<div class="featured">
    <h2>peur</h2>
    <p>peur des bâche</p>
</div>
<div class="recentlyadded content-wrapper">
    <h2>ajout de service </h2>
    <div class="service1" width="100%">
        <table style="margin: auto;">
            <tr>
                <?php foreach ($recently_added_service as $service) : ?>
                    <td><a href="index.php?page=produit&id=<?= $service['id'] ?>" class="service">
                            <img src="imgs/bache-cheval-marcher-peur.png?= $service['img'] ?>" width="150" height="150" alt="<?= $service['nom'] ?>"><br>
                            <span class="name"><?= $service['nom'] ?></span><br>
                            <span class="price">
                                &dollar;<?= $service['prix'] ?>
                                <?php if ($service['prix_Réel'] > 0) : ?>
                                    <span class="prix_Réel">&dollar;<?= $service['prix_Réel'] ?></span>
                                <?php endif; ?>
                            </span>
                        </a></td>
                <?php endforeach; ?>
            </tr>
        </table>
    </div>
</div>
<?= template_footer() ?>
    <footer>
        <a href="contact.html">contact</a>
    </footer>

    
    <script type="text/javascript" src="site.js"></script>
</body>

</html>