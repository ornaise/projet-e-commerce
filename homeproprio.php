<?php include 'index.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->
    <link rel="stylesheet" href="site.css">

    <title>service</title>
</head>

<body>

    <?php
    // Obtenez les 4 services récemment ajoutés 
    //Représente une requête préparée
    $stmt = $pdo->prepare('SELECT * FROM service ORDER BY Date_de_debut DESC LIMIT 4');
    $stmt->execute();
    $recently_added_services = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>

    <?php template_header('homeproprio') ?>
    <div class="featured">
        <h2>peur</h2>
        <p>peur des bâches</p>
    </div>
    <div class="recentlyadded content-wrapper">
        <h2>ajout de service </h2>
        <div class="services" width="100%">
            <table style="margin: auto;">
                <tr>
                    <?php foreach ($recently_added_services as $service) : ?>
                        <td><a href="index.php?page=service&id=<?php echo $service['Id_service'] ?>" class="service">
                                <img src="imgs/<?php echo $service['imgs'] ?>" width="150" height="150" alt="<?php $service['nom'] ?>"><br>
                                <span class="name"><?php $service['nom'] ?></span><br>
                                <span class="price">
                                    &dollar;<?php $service['prix'] ?>
                                    <?php if ($service['prix-Reel'] > 0) : ?>
                                        <span class="prix-Reel">&dollar;<?php $service['prix-Reel'] ?></span>
                                    <?php endif; ?>
                                </span>
                            </a></td>
                    <?php endforeach; ?>
                </tr>
            </table>
        </div>
    </div>
    <?php template_footer() ?>
    <footer>
        <a href="contact.php">contact</a>
        <a href="accueil.php">acceuil</a>
        <script type="text/javascript" src="site/site.js"></script>
    </footer>

</body>


</html>