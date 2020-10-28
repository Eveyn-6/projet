<?php ob_start(); ?>

<ul id="navbar" class="nav justify-content-center">
<li class="nav-item">
          <a class="nav-link" href="index.php?action=adminHome"><div id="navbar">Home</div></a>
        </li> 
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=userManagement">
      <div id="navbar">Gestion d'utilisateurs</div>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=">
      <div id="navbar">Gestion d'albums</div>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=">
      <div id="navbar">Gestion des photos</div>
    </a>
  </li>
</ul>
<a href="index.php?action=profil"><img class="returns" src="public/images/returns.png" alt=""></a>
<div class="membresAdminView"> </div>

<?= $adminContent ?>
</div>

<?php
$content = ob_get_clean();
require_once('view/templates.php');
