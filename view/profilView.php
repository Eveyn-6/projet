<?php ob_start(); ?>
<a href="index.php?action=home"><img class="returns" src="public/images/returns.png" alt=""></a>
<h3>Profil</h3>
<div class="alert">
    <?= $message; ?>
</div>
 
<div class="user_profil"><span>Pseudo: </span><?php echo $userinfo['pseudo']?></div>
<div class="user_profil"><span>Adresse e-mail: </span><?php echo $userinfo['email']?></div></br>
<div class="Edit"><span>Editer le profil:</span><a href="index.php?action=editprofil"><img class="deco" src="public/images/pencil.png" alt=""></a></div>
<div class="deconnexion"><span>Déconnexion:</span><a href="index.php?action=deconnexion"><img class="deco" src="public/images/deco.jpg" alt=""></a></div>
<div class="deconnexion"><span>Suppression de votre compte:</span><a href="index.php?action=deleteUserCount"><img class="deco" src="public/images/desinscription.jpg" alt=""></a></div>
 
<?php
$content = ob_get_clean();
require_once("view/templates.php");