<?php ob_start(); ?> 

<div class="nature">
     <div class="img_nature_left">
         <img src="public/images/nature/.jpg" alt="">
         <img src="public/images/nature/.jpg" alt="">
         <img src="public/images/nature/.jpg" alt="">
         <img src="public/images/nature/.jpg" alt="">
         <img src="public/images/nature/.jpg" alt="">
         <img src="public/images/nature/.jpg" alt="">
        
     </div>
 <?php 
$content = ob_get_clean();
 require_once("view/templates.php");