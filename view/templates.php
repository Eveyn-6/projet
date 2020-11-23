<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="left"><a href="index.php?action=home"><img id="logo_left" src="public/images/logo7.png" alt="logo Eveyn photographie" /></a> </div>
    <div class="content">
      <header class="header">
        <a href="index.php?action=home"><img id="logo_content" src="public/images/logo7.png" alt="logo Eveyn photographie" /></a>
        <ul id="nav" class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" href="index.php?action=home" id="accueil">
              <div id="accueil_link"> Accueil</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=album">
              <div id="navbar">Albums</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=profil">
              <div id="navbar">Profil</div>
            </a>
          </li>

          <?php
          if (isUserConnected()) {
            if (isUserAdmin()){
          ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=admin">
                <div id="navbar">Espace admin</div>
              </a>
            </li> 
            <?php
          }
         
          ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=deconnexion">
                <div id="color">Déconnexion</div>
              </a>
            </li>

          <?php

          } else {
          ?>
            <li class="nav-item">

              <a class="nav-link" href="index.php?action=inscription">
                <div id="navbar">Inscription</div>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="index.php?action=connexion">
                <div id="navbar">Connexion</div>
              </a>
            </li>
          <?php
          }

          ?>


        </ul>
      </header>
      <?= $content ?>
    </div>
  </div>
  <div class="footer">
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="public/js/javascript.js"></script>
</body>

</html>