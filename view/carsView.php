 <?php ob_start(); ?> 
 
 <div class="cars">
     <div class="car_left">
         <img src="public/images/cars/orange_car.jpg" alt="blue car">
         <img src="public/images/cars/geneve.jpg" alt= "orange car">
         <img src="public/images/cars/circle_car.jpg" alt="black car">
         <img src="public/images/cars/green_car.jpg" alt="yellow car">
         <img src="public/images/cars/red_car.jpg" alt="red car">
         <img src="public/images/cars/black_car.jpg" alt="circle car">        
     </div>
     <div class="car_right">
     <img src="public/images/cars/grey_car.jpg" alt="grey car">  
     <img src="public/images/cars/whites_car.jpg" alt="grey car">
         <img src="public/images/cars/orange_2car.jpg" alt="run car">
         <img src="public/images/cars/yellow_car.jpg" alt="grey car">
         <img src="public/images/cars/rungrey_car.jpg" alt="green car">
         <img src="public/images/cars/future_car.jpg" alt="grey car">
     </div>
 </div>

 <?php 
$content = ob_get_clean();
 require_once("view/templates.php");