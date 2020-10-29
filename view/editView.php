<?php ob_start(); ?>

<a href="index.php?action=profil"><img class="returns" src="public/images/returns.png" alt=""></a>
<h3>Editer votre profil</h3>

<div class="editView">
    <form id="formEditProfil" method="post">

        <div class="input_group">
            <label>Pseudo:</label>
            <input type="text" placeholder="Pseudo" value="<?php echo $user['pseudo'] ?>" name="pseudo">
        </div>
        <div class="input_group">
            <label>E-mail:</label>
            <input type="text" placeholder="E-mail" value="<?php echo $user['email'] ?>" name="email">
        </div>
        <div class="input_group">
            <label>Mot de passe:</label>
            <input type="password" placeholder="Mot de passe" value="<?php echo $user['password'] ?> name=" password">
        </div>
        <div class="input_group">
            <div class="btn"><button type="submit">Envoyer</button></div>
        </div>
    </form>
</div>
<?php

$content = ob_get_clean();
require_once("view/templates.php");
