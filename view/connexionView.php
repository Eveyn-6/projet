<?php ob_start(); ?>

<h3>Connexion</h3>
<div class="alert">
<?php foreach( $erreurs as $value )
     echo $value . '<br />'; ?>
</div>
 
<div class="connexionView">
    <form method="post">

        <div class="input_group">
            <label>Pseudo:</label> 
            <input type="text" placeholder="Pseudo" name="pseudo">
        </div>
        <div class="input_group">
            <label>Mot de passe:</label>
            <input type="password" placeholder="Mot de passe" name="password">
        </div>
        <div class="input_group">
            <div class="btn"><button type="submit">Connexion</button></div>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();
require_once("view/templates.php");
