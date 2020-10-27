<?php ob_start(); ?>
 
<a href="index.php?action=album"><img class="returns" src="public/images/returns.png" alt=""></a>
<div class="galery">
    <div class="img_nature_left">
        <img class="nature" src="public/images/nature/foret.jpg" alt="">
        <img class="nature"src="public/images/nature/ciel.jpg" alt="">
        <img class="nature"src="public/images/nature/loire.jpg" alt="">
        <img class="nature"src="public/images/nature/.jpg" alt="">
        <img class="nature"src="public/images/nature/.jpg" alt="">
        <img class="nature"src="public/images/nature/.jpg" alt="">

    </div>
</div>
<?php
$content = ob_get_clean();
require_once("view/templates.php");
