<?php ob_start(); ?> 
<h3>Bienvenue sur Eveyn Photographie</h3>
<div class="carousel_container"> 
<div class="container">
  <div class="carousel">
    <div class="item" id="a"><img src="public/images/urbex/urbex_factory.jpg" class="d-block w-100" alt="urbex_factory" ></div>
    <div class="item" id="b"><img src="public/images/nature/sunset.jpg" class="d-block w-100" alt="nature_sunset" ></div>
    <div class="item" id="c"><img src="public/images/urbex/urbex_sunset_wall1.jpg" class="d-block w-100" alt="urbex_sunset_wall"id="carousel"></div>
    <div class="item" id="d"><img src="public/images/nature/arbre.jpg" class="d-block w-100" alt="nature_arbre"id="carousel"></div>
    <div class="item" id="e"><img src="public/images/urbex/urbexAccueil.jpg" class="d-block w-100" alt="urbexAccueil"id="carousel"></div>
    <div class="item" id="f"><img src="public/images/nature/buterfly.jpg" class="d-block w-100" alt="nature_butterfly"id="carousel"></div>
  </div>
</div>
<div class="next">></div>
<div class="prev"><</div>
 </div>
<?php 
$content = ob_get_clean();
 require_once("view/templates.php");