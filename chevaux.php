





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
        <form method="post" action="formchevaux.php">
            <fieldset class="p-5">
                <legend class="text-center h1">Informations Personnelles :</legend>
                <div class="row">
                    <div class=" form-group col-md-6">
                        <label for="nom" class="nom">Nom :</label>
                        <input type="text" id="Nom_Cheval" class="form-control" name="nom">
                    </div>
                    <div class=" form-group  col-md-6">
                        <label for="Taille" class="Taille">Taille du cheval :</label>
                        <input type="text" class="form-control" id="Taille" name="Taille">
                    </div>
                    <div class=" form-group col-md-6">
                        <label for="race" class="Race">Race du cheval :</label>
                        <input type="text" class="form-control" id="Race" name="Race">
                    </div>
                    <div class=" form-group col-md-6">
                        <label for="Adress" class="Adresse">Adresse ou il se situe :</label>
                        <input type="text" class="form-control" id="Adresse" name="Adresse">
                    </div>
                    <div>
                        <input type="radio" id="Sexe" name="Sexe" value="Sexe" checked>
                        <label for="Sexe">Entier</label>
                    </div>

                    <div>
                        <input type="radio" id="Sexe" name="Sexe" value="Sexe">
                        <label for="Sexe">Hongre</label>
                    </div>

                    <div>
                    <input type="radio" id="Sexe" name="Sexe" value="Sexe">
                        <label for="Sexe">Jument</label>
                    </div>
                    <div>
                    <input type="radio" id="Sexe" name="Sexe" value="Sexe">
                        <label for="Sexe">Poulain</label>
                    </div>

                </div>
                <input name="submit" class="submit" id="submit" type="submit" value="valider">
            </fieldset>
        </form>
    </div>
</body>

</html>
</body>

</html>