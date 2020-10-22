 <?php ob_start(); ?> 
 
 <div class="cars">
     <div class="car_left">
         <img src="public/images/urbex/geneve.jpg" alt="">
         <img src="public/images/urbex/orange_car.jpg" alt="">
         <img src="public/images/urbex/white_car.jpg" alt="">
         <img src="public/images/urbex/yellow_car.jpg" alt="">
         <img src="public/images/urbex/red_car.jpg" alt="">
         <img src="public/images/urbex/circle_car.jpg" alt="">
        
     </div>
     <div class="car_right">
         <img src="public/images/urbex/green_car.jpg" alt="">
         <img src="public/images/urbex/white2car.jpg" alt="">
         <img src="public/images/urbex/black_car.jpg" alt="">
         <img src="public/images/urbex/grey_car.jpg" alt="">
         <img src="public/images/urbex/run_car.jpg" alt="">
         <img src="public/images/urbex/rungrey_car.jpg" alt="">
     </div>
 </div>

 <?php 
$content = ob_get_clean();
 require_once("view/templates.php");