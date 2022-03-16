<!DOCTYPE html>
<html>

<head>
    <title>formulaire</title>
    <link rel="stylesheet" href="site.css">
</head>

<body>


    <header>
        <a href="accueil.php">accueil</a>
    </header>
    <div>
        <label from="name">Nom :</label>
        <input type="text" id="name" name="user_name" class="">
    </div>
    
    <div>
        <label form="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail" class="">
    </div>


    <div>
        <label from="msg">Message :</label>
        <textarea id="msg" name="user_message" class=""></textarea>
    </div>
    <div class="button">
        <button type="submit" name="submit" class="">Envoyer le message</button>
    </div>

</body>

</html>