<?php ob_start(); ?> 
 
<h2>Page d'accueil administration</h2>
<?php
  $adminContent = ob_get_clean();
  require_once('view/admin/templateAdmin.php');

 