<?php ob_start(); ?> 
<a href="index.php?action=album"><img class="return" src="public/images/return.png" alt=""></a>
 <div class="galery">
     <div class="img_left">
         <img class="urbex" src="public/images/urbex/urbex_factory.jpg" alt="">
         <img class="urbex" src="public/images/urbex/urbex_sunset.jpg" alt="">
         <img class="urbex" src="public/images/urbex/urbex_sunset_wall1.jpg" alt="">
         <img class="urbex" src="public/images/urbex/wall.jpg" alt="">
         <img class="urbex" src="public/images/urbex/urbex_garden3.jpg" alt="">
         <img class="urbex" src="public/images/urbex/urbex_sunset_wall.jpg" alt="">
        
     </div>
     <div class="img_right">
         <img class="urbex" src="public/images/urbex/urbex_portal.jpg" alt="">
         <img class="urbex" src="public/images/urbex/urbexAccueil.jpg" alt="">
         <img class="urbex" src="public/images/urbex/urbex_garden5.jpg" alt="">
         <img class="urbex" src="public/images/urbex/urbex_house.jpg" alt="">
         <img class="urbex" src="public/images/urbex/urbex_Window.jpg" alt="">
         <img class="urbex" src="public/images/urbex/house5.jpg" alt="">
     </div>
 </div>

 <?php 
$content = ob_get_clean();
 require_once("view/templates.php");