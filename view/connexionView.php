<?php ob_start(); ?>



<h3>Connexion</h3>
<div class="alert">
    <?= $message; ?>
</div>
<div class="connexionView"> 
<form>
    <table> 
        <tr> 
            <td><label>Pseudo:</label></td>
            <td><input type="text" placeholder="Pseudo"> </td>
        </tr>
        <tr> 
            <td><label>Mot de passe:</label></td>
            <td><input type="password" placeholder="Mot de passe"> </td>
        </tr> 
        <tr>
            <td>
            <div class="btn"><button type="submit">Connexion</button></div>
        </tr>
    </td>
    </table> 
</form>
</div>
<?php
$content = ob_get_clean();
require_once("view/templates.php");