<?php ob_start(); ?>
<h3>Profil</h3>
<div class="alert">
    <?= $message; ?>
</div>

<label class="welcome">Bienvenue: <?php echo $userinfo['pseudo']; ?></label></br>
<div class="user_profil"><span>Pseudo: </span><?php echo $userinfo['pseudo']?></div>
<div class="user_profil"><span>Adresse e-mail: </span><?php echo $userinfo['email']?></div></br>


<?php
$content = ob_get_clean();
require_once("view/templates.php");