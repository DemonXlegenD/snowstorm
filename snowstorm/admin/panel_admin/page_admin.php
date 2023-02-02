<?php require_once('../../pdo.php')?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnowStorm</title>
    <link rel="stylesheet" href="../../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <header>

      <!--------------------------------------------------Effet Neige et LOGO------------------------------------------------- -->
      <div class="snow">
        <div class="flex-header">
            <div class="left-header">
                <img class="imgLogoSS" src="../../img/logoSS.png" alt="Logo de SnowStorm">
                <img src="../../img/SNOWSTORMGG.png" alt="SnowStorm.gg">
            </div>



      <!-- -------------------------------------------------------Icone Header------------------------------------------------------ -->
            <div class="right-header">
                <a href="#"><img id="imgSacShopping" src="../../img/admin_cloud.png" alt="image d'un nuage avec admin écrit au centre"></a>
                <a href="#"><img id="imgMonCompte" src="../../img/logocompte.png" alt="logo de mon compte"></a>
                <a href="#"><img id="imgLangue" src="../../img/logofrance.jpg" alt="logo du drapeau français"></a>
                
            </div>
        </div>
      </div>
    </header>



    <!-- --------------------------------------------------NAVBAR----------------------------------------------------------------------- -->
    <?php require('navbar_admin.php') ?>




    <!-- --------------------------------------------------FOOTER----------------------------------------------------------------------- -->

    <footer>
     <div class="footer">
      <div class="left-footer">
        <img class="imgLogoSS" src="../../img/logoSS.png" alt="Logo de SnowStorm">
        <img id="imgLogoSSGG" src="../../img/SNOWSTORMGG.png" alt="SnowStorm.gg">
        <p>
          © SnowStorm International Co., Ltd. All Rights Reserved.
          <br>
          Designed by
          <a id="designer" href="#" target="_blank">Nom de team</a>
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
          <a href="mailto:snowstorm.gg@gmail.com"><img src="../../img/reseaux/mail.png" alt="logo mail"></a>
          <a href="#"><img src="../../img/reseaux/brand-discord.png" alt="logo discord"></a>
          <a href="#"><img src="../../img/reseaux/brand-snapchat.png" alt="logo snapchat"></a>
          <a href="#"><img src="../../img/reseaux/brand-facebook.png" alt="logo facebook"></a>
          <a href="#"><img src="../../img/reseaux/brand-instagram.png" alt="logo instagram"></a>
          <a href="#"><img src="../../img/reseaux/brand-twitter.png" alt="logo twitter"></a>
          <a href="#"><img src="../../img/reseaux/brand-youtube.png" alt="logo youtube"></a>
        </div>

      </div>
     </div>
  </footer>


    

    <script src="script.js"></script>
</body>
</html>