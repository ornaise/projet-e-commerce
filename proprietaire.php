
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="propriétaire.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Formulaire client</title>
</head>

<body>

  <!--Les types de champs pour créer un formulaire-->
  <div class="container" id="form_page">
    <form method="post" action="classe/formproprio.php">
      <fieldset class="p-5">
        <legend class="text-center h1">Informations Personnelles :</legend>
        <div class="row">
          <div class=" form-group col-md-6">
            <label for="nom" class="">Nom de famille :</label>
            <input type="text" id="nom" class="form-control" name="nom">
          </div>
          <div class=" form-group  col-md-6">
            <label for="prenom" class="">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
          </div>
          <div class=" form-group col-md-6">
            <label for="teléphone">Téléphone :</label>
            <input type="text" class="form-control" id="téléphone" name="telephone">
          </div>
          <div class=" form-group col-md-6">
            <label for="mail">Adresse mail :</label>
            <input type="email" class="form-control" id="mail" name="mail">
          </div>
          <div class=" form-group col-md-6">
            <label for="age">Age :</label>
            <input type="number" class="form-control" id="age" name="age">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="pass">Choisissez un mot de passe :</label>
          <input type="password" name="password">
        </div>
        <input name="submit" class="btn btn-outline-warning" type="submit" value="Envoyer">
      </fieldset>
    </form>
  </div>
</body>

</html>
</body>

</html>