<!-- <?php
// Permet de cacher les erreurs
 ini_set('display_errors',true);
//require_once('classeFormulaire.php');
?> -->
<html>
    <head>
    
    <title>formulaire</title>
    </head>
    <body style="background: #9cb852ce;">
    <?php
      $pdo = require 'classeFormulaire.php';

      if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
          if(empty($_POST['nom']) AND  empty($_POST['prenom']) AND  empty($_POST
      ['telephone']) AND  empty($_POST['mail']) AND  empty($_POST['password']
      )  ) {
              die('not filled');
      
          }
      
          $nom = $_POST['nom'];
          $prenom = $_POST['prenom'];
          $phone = $_POST['telephone'];
          $mail = $_POST['mail'];
          $password = $_POST['password'];
         
          
      
          $sql = "INSERT INTO users(first_name, last_name, email, age, phone, 
      password) VALUES (?,?,?,?,?)";
      
          $statement = $pdo->prepare($sql);
          $statement->execute([$prenom, $nom, $mail, $phone, $password]);
          if($statement) echo 'good';
          else echo 'not good';
      }
    ?>
        
    </body>
</html>