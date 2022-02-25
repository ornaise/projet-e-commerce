<?php
// Permet de cacher les erreurs
// ini_set('display_errors',false);
require_once('classeFormulaire.php');
?>
<html>
    <head>
    <title>formulaire</title>
    </head>
    <body style="background: #9cb852ce;">
    <?php
        $form = new Formulaire(array('name' =>'formulaire','action'=>'classe/classeFormulaire.php'));
        //formulaire
echo "<table border=\"1\" >";
echo "<caption><b>Confirmation de vos coordonnées</b></caption>";


if (
    !empty($_POST['nom']) and !empty($_POST['prenom']) and
    !empty($_POST['adresse']) and !empty($_POST['ville']) and
    !empty($_POST['code'])
) {
    $traitement = Formulaire::traitement('proprietaire');

} else {
    echo "<script type=\"text/javascript\">alert('Le formulaire est incomplet'); </script>";
}
    ?>
        
    </body>
</html>