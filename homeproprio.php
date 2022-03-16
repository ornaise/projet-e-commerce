<?php include 'index.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->
    <link rel="stylesheet" href="style.css">

    <title>service</title>
</head>

<body>

    <?php
    // Obtenez les 4 services récemment ajoutés 
    //Représente une requête préparée
    $stmt = $pdo->prepare('SELECT * FROM service ORDER BY Date_de_debut DESC LIMIT 4');
    $stmt->execute();
    $recently_added_services = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>

 
    <div class="featured">
    </div>
    <div class="recentlyadded content-wrapper">
        <h2>Liste des services</h2>
        <div class="services" width="100%">
            <table style="margin: auto;">
                <tr>
                    <?php foreach ($recently_added_services as $service) : ?>
                        <td><a href="service.php?id=<?php echo $service['Id_service'] ?>" class="service">
                                <img src="imgs/<?php echo $service['imgs'] ?>" width="150" height="150" alt="<?php echo $service['nom'] ?>"><br>
                                <span class="name"><?php echo $service['nom'] ?></span><br>
                                <span class="prix">
                                    &euro;<?php echo $service['prix'] ?>
                                    <?php if ($service['prix-Reel'] > 0) : ?>
                                        <span class="prix-Reel">&euro;<?php echo $service['prix-Reel'] ?></span>
                                    <?php endif; ?>
                                </span>
                            </a></td>
                    <?php endforeach; ?>
                </tr>
            </table>
        </div>
    </div>
    
    <footer>
        <a href="contact.php">contact</a>
        <a href="accueil.php">acceuil</a>
        <script type="text/javascript" src="site/site.js"></script>
    </footer>

</body>


</html>