<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnowStorm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="support_sav.css">
</head>
<body>  
    <header>
      <div class="snow">
        <div class="flex-header">
            <div class="left-header">
              <img class="imgLogoSS" src="img/logoSS.png" alt="Logo de SnowStorm">
                <img src="img/SNOWSTORMGG.png" alt="SnowStorm.gg">
            </div>
            
            <div class="right-header">
                <a href="#"><img id="imgSacShopping" src="img/cadie.png" alt="image d'un sac de shopping"></a>
                <a href="#"><img id="imgMonCompte" src="img/logocompte.png" alt="logo de mon compte"></a>
                <a href="#"><img id="imgLangue" src="img/logofrance.jpg" alt="logo du drapeau français"></a>
                
            </div>
        </div>
      </div>
    </header>

    <nav class="navbar">
           
        <a href="#">NOS PRODUITS</a>
        <a href="#">PERSONNALISER</a>
        <a href="#">GALERIE</a>
        <a href="#">SUPPORT/SAV</a>
        <a href="#">FAQ</a>
        <a href="#">CONTACT</a>
        <input type="text" placeholder="Rechercher">
    
    </nav>
    
    <section>
        <article>
            <form action="">
                <div class="information">
                  <h3>Vos informations personnelles</h3>
                    <input placeholder="Votre nom" type="text" tabindex="1" required autofocus>
                    <input placeholder="Votre prénom" type="text" tabindex="2" required autofocus>
                </div>
                <div class="information">
                  <h3>Vos coordonées</h3>
                <select id="selector" type="pays" required>
                  <option value=" ">Séléctionnez votre pays</option>
                  <option>Allemagne</option>
                  <option>Autriche</option>
                  <option>Belgique</option>
                  <option>Bulgarie</option>
                  <option>Chypre</option>
                  <option>Croatie</option>
                  <option>Danemark</option>
                  <option>Espagne</option>
                  <option>Estonie</option>
                  <option>Finlande</option>
                  <option>France</option>
                  <option>Grèce</option>
                  <option>Hongrie</option>
                  <option>Irlande</option>
                  <option>Italie</option>
                  <option>Lettonie</option>
                  <option>Lituanie</option>
                  <option>Malte</option>
                  <option>Pays-Bas</option>
                  <option>Pologne</option>
                  <option>Portugal</option>
                  <option>République tchèque</option>
                  <option>Roumanie</option>
                  <option>Slovaquie</option>
                  <option>Slovénie</option>
                  <option>Suède</option>
                </select>
                    <input placeholder="Votre adresse" type="text" name="adresse" tabindex="3" require>
                    <input placeholder="Votre code postal" type="text" tabindex="4" name="codep">
                    <input placeholder="Votre ville" type="text" name="Ville" tabindex="5" require>
                </div>
                <div class="information">
                  <h3>Vos coordonnées numériques</h3>
                    <input type="email" name="email" placeholder="Votre adresse email" tabindex="6" require >
                    <input type="tel" name="tel" placeholder="Votre numéro de téléphone" tabindex="7" require>  
                </div>
                <div class="information">
                  <h3>Votre problème</h3>
                    <input type="text" name="sujet" placeholder="Le sujet de votre problème" tabindex="8" require>
                    <textarea name="probleme" id="" cols="30" rows="10" placeholder="Votre message..." tabindex="9" require></textarea>  
                </div>
                <input type="image" id="submit" src="img/toucheentree.png">
            </form>
        </article>
        <aside>
          <div>
            <h3><span>Un</span> <span>problème</span><span>?</span> <span>Envoyez</span> <span>nous</span> <span>un</span> <span>message</span><span>!</span></h3>
            <p><span>Ici</span> <span>vous</span> <span>pourrez</span> <span>envoyer</span> <span>votre</span> <span>requête</span> <span>afin</span> <span>que</span> <span>notre</span> <span>support</span> <span>puisse</span> <span>vous</span> <span>aider</span> <span>dans</span> <span>les</span> <span>meilleures</span> <span>conditions</span></p>
            <p><span>N'hésitez</span> <span>pas</span> <span>à</span> <span>consulter</span> <span>notre</span> <span>page</span> <a href="faq.php">FAQ</a> <span>qui</span> <span>peut</span> <span>contenir</span> <span>la</span> <span>solution</span> <span>à</span> <span>votre</span> <span>problème</span></p>
          </div>
        </aside>   
    </section>
    





    <footer>

     <div class="footer">
      <div class="left-footer">
        <img class="imgLogoSS" src="img/logoSS.png" alt="Logo de SnowStorm">
        <img id="imgLogoSSGG" src="img/SNOWSTORMGG.png" alt="SnowStorm.gg">
        <p>
          © SnowStorm International Co., Ltd. All Rights Reserved.
          <br>
          Designed by
          <a id="designer" href="#" target="_blank">Ichiban</a>
          <a class="policy" href="#policy">Privacy Policy</a>
        </p>
        
      </div>

      <div class="mid-footer">
        <h4>CATEGORIES</h4>
        <a href="Nouveautés">Nouveautés</a>
        <a href="Meilleures Ventes">Meilleures Ventes</a>
        <a href="Classiques">Classiques</a>
        <a href="Préfaits">Préfaits</a>
        <a href="Personnaliser">Personnaliser</a>
      </div>

      <div class="mid-footer">
        <h4>INFORMATIONS</h4>
        <a href="Nous Contacter">Nous Contacter</a>
        <a href="Livraison">Livraison</a>
        <a href="Mentions Légales">Mentions Légales</a>
        <a href="Confidentialités">Confidentialités</a>
        <a href="Conditions D'utilisation">Conditions D'utilisation</a>
      </div>

      <div class="mid-footer">
        <h4>MON COMPTE</h4>
        <a href="Mes Commandes">Mes Commandes</a>
        <a href="Mes Customs">Mes Customs</a>
        <a href="Mes Informations">Mes Informations</a>
      </div>

      <div class="right-footer">
        <h4>SUIVEZ SNOWSTORM</h4>
        <div class="logo">
          <a href="mailto:snowstorm.gg@gmail.com"><img src="img/reseaux/mail.png" alt="logo mail"></a>
          <a href="#"><img src="img/reseaux/brand-discord.png" alt="logo discord"></a>
          <a href="#"><img src="img/reseaux/brand-snapchat.png" alt="logo snapchat"></a>
          <a href="#"><img src="img/reseaux/brand-facebook.png" alt="logo facebook"></a>
          <a href="#"><img src="img/reseaux/brand-instagram.png" alt="logo instagram"></a>
          <a href="#"><img src="img/reseaux/brand-twitter.png" alt="logo twitter"></a>
          <a href="#"><img src="img/reseaux/brand-youtube.png" alt="logo youtube"></a>
        </div>

      </div>
     </div>

  </footer>

</body>
</html>