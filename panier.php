	<?php
    include 'index.php';
    /* Si l'utilisateur a cliqué sur le bouton "Ajouter au panier" sur la page du service, nous pouvons vérifier les données du formulaire.*/
    if (isset($_POST['Id_service'], $_POST['quantité']) && is_numeric($_POST['Id_service']) && is_numeric($_POST['quantité'])) {
        /* Définissez les variables post afin que nous puissions les identifier facilement, assurez-vous également qu'elles sont entières.*/
        $Id_service = (int)$_POST['Id_service'];
        $quantité = (int)$_POST['quantité'];
        /* Préparez l'instruction SQL, nous vérifions essentiellement si le service existe dans notre base de données.*/
        $stmt = $pdo->prepare('SELECT * FROM service WHERE Id_service');
        $stmt->execute([$_POST['Id_service']]);
        /* Récupère le service depuis la base de données et renvoie le résultat sous forme de tableau.*/
        $service = $stmt->fetch(PDO::FETCH_ASSOC);
        // Vérifier si le service existe (le tableau n'est pas vide)   
        if ($service && $quantité > 0) {
            /*Le service existe dans la base de données, maintenant nous pouvons créer/mettre à jour la variable de session pour le panier.*/
            if (isset($_SESSION['panier']) && is_array($_SESSION['panier'])) {
                if (array_key_exists($Id_service, $_SESSION['panier'])) {
                    // Le service existe dans le panier, il suffit de mettre à jour la quantité.   
                    $_SESSION['panier'][$Id_service] += $quantité;
                } else {
                    // Le service n'est pas dans le panier, ajoutez-le   
                    $_SESSION['panier'][$Id_service] = $quantité;
                }
            } else {
                /* Il n'y a aucun service dans le panier, ceci ajoutera le premier service au panier.*/
                $_SESSION['panier'] = array($Id_service => $quantité);
            }
        }
      
    }


    /* Retirez le service du panier, vérifiez le paramètre "remove" de l'URL, c'est l'identifiant du service, assurez-vous qu'il s'agit d'un numéro et vérifiez s'il est dans le panier.*/
    if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['panier']) && isset($_SESSION['panier'][$_GET['remove']])) {
        // Remove the service from the shopping panier   
        unset($_SESSION['panier'][$_GET['remove']]);
    }


    /* Mettre à jour les quantités de services dans le panier si l'utilisateur clique sur le bouton "Mettre à jour" sur la page du panier d'achat*/
    if (isset($_POST['update']) && isset($_SESSION['panier'])) {
        /* Boucle à travers les données postales afin de mettre à jour les quantités pour chaque service du panier.*/
        foreach ($_POST as $k => $v) {
            if (strpos($k, 'quantité') !== false && is_numeric($v)) {
                $Id_service = str_replace('quantité-', '', $k);
                $quantité = (int)$v;
                // Effectuez toujours des contrôles et des validations   
                if (is_numeric($Id_service) && isset($_SESSION['panier'][$Id_service]) && $quantité > 0) {
                    // Mise à jour de la nouvelle quantité   
                    $_SESSION['panier'][$Id_service] = $quantité;
                }
            }
        }
        
    }


    /* Diriger l'utilisateur vers la page de commande s'il clique sur le bouton Passer la commande, le panier ne doit pas être vide.*/
    if (isset($_POST['placerCommande']) && isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
        header(' placerCommande.php?placerCommande');
        exit;
    }

    /* Vérification de la variable de session pour les services en panier*/
    $services_in_panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : array();
    $services = array();
    $subtotal = 0.00;
    // S'il y a des services dans le panier   
    if ($services_in_panier) {
        /* Il y a des services dans le panier, nous devons donc sélectionner ces services dans la base de données.*/
        /* Mettre les services du panier dans un tableau de chaîne de caractères avec point d'interrogation, nous avons besoin que l'instruction SQL inclue  ( ?,?, ?,...etc).*/
        $array_to_question_marks = implode(',', array_fill(0, count($services_in_panier), '?'));
        $stmt = $pdo->prepare('SELECT * FROM service WHERE Id_service IN (' . $array_to_question_marks . ')');
        /* Nous avons uniquement besoin des clés du tableau, pas des valeurs, les clés sont les identifiants des services. */
        $stmt->execute(array_keys($services_in_panier));
        /* Récupérer les services de la base de données et retourner le résultat sous la forme d'un tableau.*/
        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Calculez le total partiel   
        foreach ($services as $service) {
            $subtotal += (float)$service['prix'] * (int)$services_in_panier[$service['Id_service']];
        }
    }
    ?>

	
    <head>
    <link rel="stylesheet" href="panier.css">
    </head>
    <header>
        <nav>

            <label for="toggle" style=" display: none; ">☰</label>
            <input type="checkbox" id="toggle">
            <div class="main_pages">
                <a href="#">Accueil</a>
                <a href="#">Actualité</a>
                <a href="contact.php">Contact</a>
                <a href="#">Urgence</a>
                <a href="homeproprio.php">Service</a>
                <a href="proprietaire.php">client</a>
                <a href="panier.php">Panier</a>

            </div>
        </nav>

    </header>
	<div class="panier content-wrapper">
	    <h1>Panier d'achat</h1>
	    <form action="placerCommande.php" method="post">
	        <table>
	            <thead>
	                <tr>
	                    <td colspan="2">service</td>
	                    <td>prix</td>
	                    <td>quantité</td>
	                    <td>Total</td>
	                </tr>
	            </thead>
	            <tbody>
	                <?php if (empty($services)) : ?>
	                    <tr>
	                        <td colspan="5" style="text-align:center;">Vous n'avez aucun service ajouté dans votre panier</td>
	                    </tr>
	                <?php else : ?>
	                    <?php foreach ($services as $service) : ?>
	                        <tr>
	                            <td class="imgs">
	                                <a href="service.php?id=<?php echo $service['Id_service'] ?>">
	                                    <img src="imgs/<?php echo $service['imgs'] ?>" width="50" height="50" alt="<?php echo $service['nom'] ?>">
	                                </a>
	                            </td>
	                            <td><a href="service.php?id=<?php echo $service['Id_service'] ?>"><?php echo $service['nom'] ?></a>
	                                <br>
	                                <a href="panier.php?remove=<?php echo $service['Id_service'] ?>" class="remove"><i class="fas fa-trash">&nbsp;</i>Supprimer </a>
	                            </td>
	                            <td class="prix">&euro;<?php echo $service['prix'] ?></td>
	                            <td class="quantité"><input type="number" name="quantité-<?php echo $service['Id_service'] ?>" value="<?php $services_in_panier[$service['Id_service']] ?>" min="1" max="<?php echo $service['quantité'] ?>" placeholder="quantité" required></td>
	                            <td class="prix">&euro;<?php echo $service['prix'] * $services_in_panier[$service['Id_service']] ?></td>
	                        </tr>
	                    <?php endforeach; ?>
	                <?php endif; ?>
	            </tbody>
	        </table>
	        <div class="subtotal">
	            <span class="text">total</span>
	            <span class="prix">&euro;<?php echo $subtotal ?></span>
	        </div>
	        <div class="buttons">
	            <input type="submit" value="Mettre à jour" name="update">
	            <input type="submit" value="Passer la commande" name="placerCommande">
	        </div>
	    </form>
	</div>
	










	