<html>

<head>

    <title>Informations chevaux</title>
</head>

<body >

    <?php
    include_once 'index.php';
    include_once 'login/register.php';
    include_once 'login/login.php';
    require 'classe/classeFormulaire.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        if (empty($_POST['nom']) and  empty($_POST['Taille']) and  empty($_POST['Race']) and  empty($_POST['Adresse']) and  empty($_POST['Sexe'])) {
            die('not filled');
        }

        $nom = $_POST['nom'];
        $Taille = $_POST['Taille'];
        $Race = $_POST['Race'];
        $Adresse = $_POST['Adresse'];
        $Sexe = $_POST['Sexe'];

      
        
    

        $sql = ("INSERT INTO cheval(Nom_Cheval, Race, Taille, Adresse, Sexe) VALUES (?,?,?,?,?)");

     
        $statement = $pdo->prepare($sql);
        $statement->execute([$nom, $Taille, $Race, $Adresse,$Sexe]);
        if ($statement) echo 'good';
        else echo 'not good';
    }
    
    ?>

</body>

</html>