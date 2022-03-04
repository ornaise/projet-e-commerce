<?php 
	/* Determiner le nombre de service à afficher sur chaque page*/
	$nbr_service1_sur_chaque_page = 2;
	/* La page actuelle, apparaîtra dans l'URL  comme index.php?page=produits&p=1 ou p=2 ce signifié la page 1 l& page 2 etc...*/
	$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
	/* Sélectionnez les produits commandés par la date ajoutée*/
	$stmt = $pdo->prepare('SELECT * FROM service1 ORDER BY date_ajou DESC LIMIT ?,?');
	/* bindValue nous permettra d'utiliser des entiers dans la déclaration SQL, que nous devons utiliser pour LIMIT.*/
	$stmt->bindValue(1, ($current_page - 1) * $nbr_service1_sur_chaque_page, PDO::PARAM_INT);
	$stmt->bindValue(2, $nbr_services1_sur_chaque_page, PDO::PARAM_INT);
	$stmt->execute();
	/* récupérer les services de la base de données et retourner le résultat sous la forme d'un tableau.*/
	$service1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	// Obtenir le nombre total de services
	$total_service1 = $pdo->query('SELECT * FROM service1')->rowCount();
	?>
    	<?=template_header('service1')?>
	<div class="service1 content-wrapper">
	    <h1>service</h1>
	    <p><?=$total_service1?> services</p>
	    <div class="service1-wrapper"><table><tr>
	        <?php foreach ($service1 as $service): ?>
	        <td><a href="index.php?page=service&id=<?=$service['id']?>" class="service">          
              <img src="imgs/peur des objets.png<?=$service['img']?>" width="200" height="200" alt="<?=$service['nom']?>"><br>
	            <span class="nom"><?=$service['nom']?></span><br>
	            <span class="price">
	                &dollar;<?=$service['prix']?>
	                <?php if ($service['prix_Réel'] > 0): ?>  
	               <span class="prix_Réel">&dollar;<?=$service['prix_Réel']?></span>
	                <?php endif; ?>
	            </span>
	        </a></td>
	        <?php endforeach; ?>
	               </tr></table>
	    </div>
	    <div class="buttons">
	        <?php if ($current_page > 1): ?>
	        <a href="index.php?page=service1&p=<?=$current_page-1?>"><i class="fas fa-angle-double-left"> </i> Prev</a>
	        <?php endif; ?>
	        <?php if ($total_service1 > ($current_page * $nbr_service1_sur_chaque_page) - $nbr_service1_sur_chaque_page + count($produits)): ?>
	        <a href="index.php?page=service1&p=<?=$current_page+1?>">Next <i class="fas fa-angle-double-right"> </i></a>
	        <?php endif; ?>
	    </div>
	</div>
	<?=template_footer()?>
	

	

	
