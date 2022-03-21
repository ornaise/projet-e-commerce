<html>

<head>

    <title>Informations commande</title>
</head>

<body >

    <?php
    include_once 'index.php';
    require 'classe/classeFormulaire.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        if (empty($_POST['NumeroDeCommande']) and  empty($_POST['AdresseDeFacturation']) and  empty($_POST['Produit']) and  empty($_POST['Service']) and  empty($_POST['facture'])) {
            die('not filled');
        }

        $NumeroDeCommande = $_POST['Numero'];
        $AdresseDeFacturation = $_POST['AdresseDeFacturation'];
        $Produit = $_POST['Produit'];
        $Service = $_POST['Service'];
        $facture = $_POST['facture'];

      
        
    

        $sql = ("INSERT INTO commande(NumeroDeCommande, AdresseDeFacturation, Produit, Service, facture) VALUES (?,?,?,?,?)");

     
        $statement = $pdo->prepare($sql);
        $statement->execute([ $NumeroDeCommande, $AdresseDeFacturation, $Produit,  $Service, $facture]);
        if ($statement) echo 'good';
        else echo 'not good';
    }
    
    ?>

</body>

</html>