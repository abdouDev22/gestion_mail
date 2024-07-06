<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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

  <section class="contact-form">
      <div class="container">
          <form action="#" method="post">
              <div class="form-group">
                  <label for="name">Nom :</label>
                  <input type="text" id="name" name="name" required>
              </div>
              <div class="form-group">
                  <label for="email">Email :</label>
                  <input type="email" id="email" name="email" required>
              </div>
              <div class="form-group">
                  <label for="message">Message :</label>
                  <textarea id="message" name="message" required></textarea>
              </div>
              <button type="submit" class="btn">Envoyer</button>
          </form>
      </div>
  </section>

  
</body>
</html>