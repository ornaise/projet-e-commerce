<?php 
	/* Determiner le nombre de service à afficher sur chaque page*/
	$nbr_services_sur_chaque_page = 2;
	/* La page actuelle, apparaîtra dans l'URL  comme index.php?page=services&p=1 ou p=2 ce signifié la page 1 l& page 2 etc...*/
	$current_page = isset($_GET['s']) && is_numeric($_GET['s']) ? (int)$_GET['s'] : 1;
	/* Sélectionnez les services commandés par la date ajoutée*/
	$stmt = $pdo->prepare('SELECT * FROM services ORDER BY Date_de_debut DESC LIMIT ?,?');
	/* bindValue nous permettra d'utiliser des entiers dans la déclaration SQL, que nous devons utiliser pour LIMIT.*/
	$stmt->bindValue(1, ($current_page - 1) * $nbr_services_sur_chaque_page, PDO::PARAM_INT);
	$stmt->bindValue(2, $nbr_services1_sur_chaque_page, PDO::PARAM_INT);
	$stmt->execute();
	/* récupérer les services de la base de données et retourner le résultat sous la forme d'un tableau.*/
	$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	// Obtenir le nombre total de services
	$total_services = $pdo->query('SELECT * FROM services')->rowCount();
	?>
    	<?=template_header('services')?>
	<div class="services content-wrapper">
	    <h1>service</h1>
	    <p><?=$total_services?> services</p>
	    <div class="services-wrapper"><table><tr>
	        <?php foreach ($services as $service): ?>
	        <td><a href="index.php?page=service&id=<?=$service['id']?>" class="service">          
              <img src="imgs/<?=$service['img']?>" width="200" height="200" alt="<?=$service['nom']?>"><br>
	            <span class="nom"><?=$service['nom']?></span><br>
	            <span class="price">
	                &dollar;<?=$service['prix']?>
	                <?php if ($service['prix_Reel'] > 0): ?>  
	               <span class="prix_Reel">&dollar;<?=$service['prix_Reel']?></span>
	                <?php endif; ?>
	            </span>
	        </a></td>
	        <?php endforeach; ?>
	               </tr></table>
	    </div>
	    <div class="buttons">
	        <?php if ($current_page > 1): ?>
	        <a href="index.php?page=services&p=<?=$current_page-1?>"><i class="fas fa-angle-double-left"> </i> Prev</a>
	        <?php endif; ?>
	        <?php if ($total_services > ($current_page * $nbr_services_sur_chaque_page) - $nbr_services_sur_chaque_page + count($services)): ?>
	        <a href="index.php?page=services&p=<?=$current_page+1?>">Next <i class="fas fa-angle-double-right"> </i></a>
	        <?php endif; ?>
	    </div>
	</div>
	<?=template_footer()?>
	

	

	
