<?php ob_start(); ?>

<div class="card-groups">
    <div id="urbex-card" class="card mb-3">
      <img  id="image_index"class="card-img-top" src="public/images/urbex/urbexAccueil.jpg" alt="urbex photographe">
      <div class="card-body">
       <a class="nav-link" href="index.php?action=urbexView" > <h6 class="card-title">Urbex</h6></a>
        <p class="card-text"> </p>
      </div>
    </div>

    <div id="med-card" class="card mb-3">
      <img id="image_index"class="card-img-top" src="public/images/nature/buterfly.jpg" alt="buterfly image">
      <div class="card-body">
       <a class="nav-link" href="index.php?action=natureView" > <h6 class="card-title">Nature</h6></a> 
        <p class="card-text"> </p>
      </div>
    </div>
  </div>
  <?php
 $content = ob_get_clean();
 require_once("view/templates.php");