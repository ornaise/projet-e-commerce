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
    $stmt = $pdo->prepare('SELECT * FROM services ORDER BY Date_de_debut DESC LIMIT 4');
    $stmt->execute();
    $recently_added_services = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>

    <?= template_header('accueil') ?>
    <div class="featured">
        <h2>peur</h2>
        <p>peur des bâche</p>
    </div>
    <div class="recentlyadded content-wrapper">
        <h2>ajout de service </h2>
        <div class="services" width="100%">
            <table style="margin: auto;">
                <tr>
                    <?php foreach ($recently_added_service as $service) : ?>
                        <td><a href="index.php?page=service&id=<?= $service['id'] ?>" class="service">
                                <img src="imgs/?= $service['img'] ?>" width="150" height="150" alt="<?= $service['nom'] ?>"><br>
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
        <a href="contact.php">contact</a>
    <script type="text/javascript" src="site/site.js"></script>
    </footer>

</body>


</html>