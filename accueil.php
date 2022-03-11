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
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
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
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div class="container">
        <h2>Présentation</h2>
        <p>.....................</p>

        <img class="image" src="imgs/chevaux.png" alt='chevaux' align='right'width= '70%'>

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