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