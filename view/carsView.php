 <?php ob_start(); ?> 
 <a href="index.php?action=album"><img class="return" src="public/images/return.png" alt=""></a>
 <div class="galery">
     <div class="car_left">
         <img class="cars" src="public/images/cars/orange_car.jpg" alt="orange car">
         <img class="cars" src="public/images/cars/geneve.jpg" alt= "geneve car">
         <img class="cars" src="public/images/cars/circle_car.jpg" alt="circle car">
         <img class="cars" src="public/images/cars/green_car.jpg" alt="green car">
         <img class="cars" src="public/images/cars/red_car.jpg" alt="red car">
         <img class="cars" src="public/images/cars/black_car.jpg" alt="black car">        
     </div>
     <div class="car_right">
         <img class="cars" src="public/images/cars/grey_car.jpg" alt="grey car">  
         <img class="cars" src="public/images/cars/whites_car.jpg" alt="white car">
         <img class="cars" src="public/images/cars/orange_2car.jpg" alt="run car">
         <img class="cars" src="public/images/cars/yellow_car.jpg" alt="yellow car">
         <img class="cars" src="public/images/cars/rungrey_car.jpg" alt="rungrey car">
         <img class="cars" src="public/images/cars/future_car.jpg" alt="future car">
     </div>
 </div>

 <?php 
$content = ob_get_clean();
 require_once("view/templates.php");