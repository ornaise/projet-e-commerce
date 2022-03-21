<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->
    <link rel="stylesheet" href="site.css">

    <title>site e-commerce</title>
</head>

<body>
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
    <!-- Slideshow container -->
    <h1>LES MURMURES D'ÉPONA</h1>
    <div class="slideshow-container">

        <!--Images pleine largeur avec numéro et texte de légende -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 2</div>
            <img src="imgs/Princesse au pré.png" style="width:100%">
            <div class="text">Princesse au repos , journée tranquille .</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 2</div>
            <img src="imgs/princesse fait un selfie.png" style="width:100%">
            <div class="text">Princesse adore les selfies </div>
        </div>
        <!--Boutons suivant et précédent -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- Les points/cercles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div class="container">
        <div>

            <h2>Bonjour et Bienvenue</h2>
            <p>Tous chevaux ayant subis un traumatisme même minime peut avoir besoin d’aide et tout propriétaire peut demander de l’aide pour l’aider .<br />

                Pourquoi ? Vous avez remarquez un changement dans le comportement de votre cheval et vous ignorez quel comportement adopté, je sais que cela peut faire peur et vous met dans une position inconfortable vis à vis de votre compagnon qui était si calme et sans crainte .</br>

                Sachez que vous n’êtes pas seul face à cela, comme l’homme a parfois besoin d’aide dans sa vie, les chevaux peuvent également avoir besoin d’une aide que vous n’arrivez pas à lui apporter dans l’immédiat. Mon premier conseil serait dans un premier temps de rester calme, c’est tout bête mais votre compagnon sera très réceptif à vos sentiments .</br>

                Votre cheval malgré sa peur, si vous de votre coté vous restez calme cela l’aidera déjà énormément.</br>

                Parlez lui, je sais, vous vous dîtes, mais que vais-je lui dire ? Je vous répondrais, parlez lui simplement de votre journée ou de vos souvenirs avec lui, cela l’aidera et vous aidera .</br>

                Même si votre compagnon prend peur et a un comportement dangereux dû a la crainte, continuez de lui parler calmement et restez calme, ça ne sera pas facile devant le feu de l’action mais croyez-moi que cela aidera beaucoup votre compagnon et cela vous aidera également à garder ce lien précieux que vous avez crée tous les deux.</p>
        </div>
        <img class="image" src="imgs/chevaux.png" alt='chevaux' >

    </div>



    <footer>
        <a href="contact.php">contact</a>
        <a href="#">politique de confidentialité</a>
        <a href="#">cookie</a>
        <a href="#">mention légale</a>
        <a href="#">à propos de nous</a>




    </footer>
    <script type="text/javascript" src="site.js"></script>

</body>

</html>