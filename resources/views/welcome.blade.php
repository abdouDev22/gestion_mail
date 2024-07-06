<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/scss/app.scss' ,'resources/js/app.js'])
    </head>
    <body>
        <header>
            <nav>
                <div class="container">
                    <div class="logo">MonSite</div>
                    <ul class="nav-links">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="#">À Propos</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <section class="hero">
            <div class="container">
                <h1>Bienvenue sur MonSite</h1>
                <p>Découvrez nos services de qualité.</p>
                <a href="#" class="btn">En savoir plus</a>
            </div>
        </section>
    
       
    </body>
</html>
