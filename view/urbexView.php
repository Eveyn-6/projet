<?php ob_start(); ?> 
 
 <div class="urbex">
     <div class="img_left">
         <img src="public/images/urbex/urbex_factory.jpg" alt="">
         <img src="public/images/urbex/urbex_sunset.jpg" alt="">
         <img src="public/images/urbex/urbex_sunset_wall1.jpg" alt="">
         <img src="public/images/urbex/wall.jpg" alt="">
         <img src="public/images/urbex/urbex_garden3.jpg" alt="">
         <img src="public/images/urbex/urbex_sunset_wall.jpg" alt="">
        
     </div>
     <div class="img_right">
         <img src="public/images/urbex/urbex_portal.jpg" alt="">
         <img src="public/images/urbex/urbexAccueil.jpg" alt="">
         <img src="public/images/urbex/urbex_garden5.jpg" alt="">
         <img src="public/images/urbex/urbex_house.jpg" alt="">
         <img src="public/images/urbex/urbex_Window.jpg" alt="">
         <img src="public/images/urbex/house5.jpg" alt="">
     </div>
 </div>

 <?php 
$content = ob_get_clean();
 require_once("view/templates.php");