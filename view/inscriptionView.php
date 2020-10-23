<?php ob_start(); ?>

<h3>Inscription</h3>
<div class="alert ">
    <?= $message; ?>
</div>
<div class="inscriptionView">
    <form method="POST">
        <div class="input_group">
            <label>Pseudo:</label>
            <input type="text" placeholder="Pseudo" name="pseudo">
        </div>
        <div class="input_group">
            <label>E-mail:</label>
            <input type="text" placeholder="E-mail" name="email">
        </div>
        <div class="input_group">
            <label>Confirmation de l'e-mail:</label>
            <input type="text" placeholder="E-mail confirmation" name="confiMail">
        </div>
        <div class="input_group">
            <label>Mot de passe:</label>
            <input type="password" placeholder="Mot de passe" name="password">
        </div>
        <div class="input_group">
            <label>Confirmation du mot de passe:</label>
            <input type="password" placeholder="Mot de passe confirmation" name="password2">
        </div>
        <div class="input_group">
            <div class="btn"><button type="submit" name="inscriptionView">Envoyer le fomrulaire</button></div>
        </div>

    </form>
</div>
<?php
$content = ob_get_clean();
require_once("view/templates.php");
