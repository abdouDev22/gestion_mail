<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="contact2.css">
 
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RH</title>
    @vite(['resources/scss/contact.scss'])
     </head>
  <body>
    <nav>
      <div class="logo">
        <strong>SMTP</strong>
        <span>mail</span>
      </div>
     

    </nav>
    <section>
      <div class="cercle">
       <div class="shadow"></div>
      <div class="bowl">
      <div class="liquid">
      </div>
    </div> 
      </div>
      
    <div class="wrapper">
      <div class="form-wrapper sign-in">
        <form action="/mail" method="post">
          @csrf
          <h2>Contact</h2>
          <div class="input-group">
            <input type="text" name="name" id="name" required>
            <label for="name">Nom</label>
          </div>
          <div class="input-group">
              <input type="email" name="email" id="email" required>
              <label for="email">Email</label>
            </div>
          <div class="input-group">
            <input type="text" name="message" id="message" required >
            <label for="text">Votre message </label>
          </div>
          <button type="submit">Envoyer</button>
        </form>
      </div>
    </div>
    <div class="cercle1">
      <div class="shadow"></div>
     <div class="bowl">
     <div class="liquid">
     </div>
   </div> 
     </div>
  </section>
    
    
    
    <script>
      let list= document.querySelectorAll('.list');
      for (let i=0;i<list.length;i++){
        list[i].onclick =function(){
          let j =0;
          while(j<list.length){
            list[j++].className='list';
          }
          list[i].className = 'list active';
        }
      }
    </script>
    
    
    

  </body>
</html>
