<?php ob_start(); ?> 

<?php foreach( $membres as $value ){ ?>
     <?=  $value ['pseudo'] ?><br />
     <div class="btn"><button type="submit" name="delete">Supprimer le compte</button></div

<?php } ?> 
 

<?php
  $adminContent = ob_get_clean();
  require_once('view/admin/templateAdmin.php');

 