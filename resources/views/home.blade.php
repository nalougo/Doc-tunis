<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAT: votre site de gestion de films</title>
    <!-- Lien vers le fichier CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logoo.png" alt="DocATunis"/>
        </div>
        <nav>
            <div class="login-container">
                <strong>
                    <a href="{{ url('connexion') }}" class="login-button">Se connecter</a>   
                    <a href="{{ url('apropos') }}" class="button">A propos</a>
                </strong>
            </div>
        </nav>
    </header>
    <div class="image-container"></div>
    <div class="text-overlay">
        <h1>DOC A TUNIS</h1>
        <p>Tout savoir sur vos films préférés</p>
    </div>
    <section class="carousel">
        <h2><strong>FILMS ET SERIES POPULAIRES</strong></h2>
        <div class="images-container">
            <img src="images/7ca7af58d2309bef597ab49b3b83528296a36b4.jpgc" alt="Film 1" class="image">
            <img src="images/alita.jpeg" alt="Film 3" class="image">
            <img src="images/WAKANDA.jpg" alt="Film 4" class="image">
            <img src="images/footeuse.jpg" alt="Film 5" class="image">
            <img src="images/creed.jpg" alt="Film 6" class="image">
            <img src="images/avengers-infinity-war-affiche-francaise-1019703-630x900.jpg" alt="Film 7" class="image">    
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Docatunis - Tous droits réservés</p>
    </footer>
</body>
</html>
