<?php ob_start(); ?>
<a href="index.php?action=home"><img class="returns" src="public/images/returns.png" alt=""></a>
<div class="card-groups">
    <div id="urbex-card" class="card mb-3">
      <img class="card-img-top" src="public/images/urbex/urbexAccueil.jpg" alt="urbex photographe">
      <div class="card-body">
       <a class="nav-link" href="index.php?action=urbex" > <h6 class="card-title">Urbex</h6></a>
        <p class="card-text"> </p>
      </div>
    </div>

    <div id="med-card" class="card mb-3">
      <img class="card-img-top" src="public/images/cars/geneve.jpg" alt="buterfly image">
      <div class="card-body">
       <a class="nav-link" href="index.php?action=cars" > <h6 class="card-title">Automobile</h6></a> 
        <p class="card-text"> </p>
      </div>
    </div>

    <div id="med-card" class="card mb-3">
      <img class="card-img-top" src="public/images/nature/Nature.jpg" alt="buterfly image">
      <div class="card-body">
       <a class="nav-link" href="index.php?action=nature" > <h6 class="card-title">Nature</h6></a> 
        <p class="card-text"> </p>
      </div>
    </div>
  </div>
  <?php
 $content = ob_get_clean();
 require_once("view/templates.php");