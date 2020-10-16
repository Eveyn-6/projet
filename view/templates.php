<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>
    <body>
    <header class="header">
 <a href=" .php"><img id="logo" src="public/images/logo4.png" alt="logo Eveyn photographie"</a>
    <ul id="nav" class="nav justify-content-center">
    <li class="nav-item">
    
          <a id="accueil" class="nav-link active" href="index.php?action=home"> <div id="accueil_link"> Accueil</div></a>
        </li>  <li class="nav-item">
          <a class="nav-link" href="index.php?action=profilView"><div id="color">Profil</div></a>
        </li>      
        <li class="nav-item">
          <a class="nav-link" href="urbex.php"><div id="color">Albums</div></a>
        </li>
               
          <li class="nav-item">
          <a class="nav-link" href="index.php?action=inscription"><div id="color">Inscription</div></a>
          </li> 
        </li>
          <li class="nav-item">
          <a class="nav-link" href="index.php?action=connexion"><div id="color">Connexion</div></a>
        </li>    
        <li class="nav-item">
          <a class="nav-link" href=index.php?action=deconnexion" "><div id="color">Déconnexion</div></a>
        </li>
      </ul>
 </header>
        <?= $content ?>
        
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="javascript/javascriptpro.js"></script>
 
    </body>
</html>
 