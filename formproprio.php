<html>

<head>

    <title>formulaire</title>
</head>

<body >

    <?php
    include_once 'index.php';
    require 'classe/classeFormulaire.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        if (empty($_POST['nom']) and  empty($_POST['prenom']) and  empty($_POST['telephone']) and  empty($_POST['mail']) and  empty($_POST['password'])) {
            die('not filled');
        }

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $phone = $_POST['telephone'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];

      
        $_SESSION['$nom']=$nom;
    

        $sql = ("INSERT INTO proprietaire(Nom, Prenom, Adresse_mail, Numero_de_telephone, password) VALUES (?,?,?,?,?)");

     
        $statement = $pdo->prepare($sql);
        $statement->execute([$prenom, $nom, $mail, $phone, $password]);
        if ($statement) echo 'good';
        else echo 'not good';
    }
    header('location: chevaux.php')
    ?>

</body>

</html>