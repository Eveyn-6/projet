<?php ob_start(); ?>
<h3>Bienvenue sur Eveyn Photographie</h3>

<div class="sunset">
  <a href="index.php?action=album"><img src="public/images/cars/orange_car.jpg"></a>
</div>

<div class="carousel">
  <div class="holder">
    <img src="public/images/urbex/urbex_factory.jpg" alt="urbex factory" />
    <img src="public/images/nature/sunset.jpg" alt="sunset" />
    <img src="public/images/nature/cat.jpg" alt="cat" />
    <img src="public/images/cars/yellow_car.jpg" alt="yellow car" />
    <img src="public/images/urbex/urbexAccueil.jpg" alt="urbexAccueil" />
    <img src="public/images/cars/red_car.jpg" alt="Nature" />
    <img src="public/images/urbex/urbex_portal.jpg" alt="urbex portal" />
    <img src="public/images/nature/arbre.jpg" alt="arbre" />
  </div>
</div>

<?php
$content = ob_get_clean();
require_once("view/templates.php");
