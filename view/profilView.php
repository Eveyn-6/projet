<?php ob_start(); ?>
<a href="index.php?action=home"><img class="return" src="public/images/return.png" alt=""></a>
<h3>Profil</h3>
<div class="alert">
    <?= $message; ?>
</div>

<label class="welcome">Bienvenue: <?php echo $userinfo['pseudo']; ?></label></br>
<div class="user_profil"><span>Pseudo: </span><?php echo $userinfo['pseudo']?></div>
<div class="user_profil"><span>Adresse e-mail: </span><?php echo $userinfo['email']?></div></br>
 <div class="deconnexion"><span>Déconnexion</span><a href="index.php?action=deconnexion"><img class="deco" src="public/images/deco.jpg" alt=""></a></div>
<?php
$content = ob_get_clean();
require_once("view/templates.php");