<?php  

	include 'index.php';
	 // Vérifiez si le paramètre id est spécifié dans l'URL.  
	 if (isset($_GET['id'])) {  
	     // Pour éviter toute injection SQL, préparez l'instruction et exécutez-la.  
	     $stmt = $pdo->prepare('SELECT * FROM service WHERE Id_service ='.$_GET['id']);  
	      $stmt->execute();  
	     /*  Récupérer le service de la base de données et retourner le résultat sous forme de tableau.*/  
	     $service = $stmt->fetch(PDO::FETCH_ASSOC);  
	     /* Vérifiez si le service existe (le tableau n'est pas vide)*/  
	     if (!$service) {  
	         /*Erreur simple à afficher si l'id du service n'existe pas (le tableau est vide)*/  
	         exit('le service n\'existe pas!');  
	     }
	 } else {  
	     //  Erreur simple à afficher si l'id n'a pas été spécifié.  
	     exit('le service n\'existe pas car pas spécifié!');  
	 }
	 ?>
		

      
	<div class="service content-wrapper">
	    <img src="imgs/<?php echo $service['imgs']?>" width="500" height="500" alt="<?php echo  $service['nom']?>">
	    <div>
	        <h1 class="name"><?php echo $service['nom']?></h1>
	        <span class="price"> &euro;<?php echo  $service['prix']?>
	              <?php if ($service['prix-Reel'] > 0): ?>
	             <span class="prix-Reel"> &euro;<?php echo $service['prix-Reel']?></span>
	             <?php endif; ?>
	         </span>
	         <form action="panier.php?page=panier" method="post">
	             <input type="number" name="quantité" value="1" min="1" max="<?php echo $service['quantité']?>" placeholder="Quantité" required>
	             <input type="hidden" name="Id_service" value="<?php echo  $service['Id_service']?>">           
                  <input type="submit" value="Ajouter_au_panier">
	         </form>
	         <div class="description">
	             <?php echo $service['description']?>
	         </div>
	     </div></div>
	
	

