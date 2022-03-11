<html>

<head>

    <title>formulaire</title>
</head>

<body style="background: #9cb852ce;">
    <?php
    $pdo = require 'classeFormulaire.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
        if (empty($_POST['nom']) and  empty($_POST['prenom']) and  empty($_POST['telephone']) and  empty($_POST['mail']) and  empty($_POST['password'])) {
            die('not filled');
        }

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $phone = $_POST['telephone'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];



        $pdo = "INSERT INTO users(first_name, last_name, email, age, phone, 
      password) VALUES (?,?,?,?,?)";

        $statement = $sql->prepare($pdo);
        $statement->execute([$prenom, $nom, $mail, $phone, $password]);
        if ($statement) echo 'good';
        else echo 'not good';
    }
    ?>

</body>

</html>