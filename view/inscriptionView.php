<?php ob_start(); ?>

<h3>Inscription</h3>
<div class="alert ">
    <?= $message; ?>
</div>
<div class="inscriptionView"> 
<form method="POST">
    
    <table> 
        <tr> 
            <td><label>Pseudo:</label></td>
            <td><input type="text" placeholder="Pseudo" name="pseudo"> </td>
        </tr>
        <tr> 
            <td><label>E-mail:</label></td>
            <td><input type="text" placeholder="E-mail" name="email"> </td>
        </tr>
        <tr> 
            <td><label>Confirmation de l'e-mail:</label></td>
            <td><input type="text" placeholder="E-mail confirmation" name="confiMail"> </td>
        </tr>
        <tr> 
            <td><label>Mot de passe:</label></td>
            <td><input type="password" placeholder="Mot de passe" name="password"> </td>
        </tr>
        <tr> 
            <td><label>Confirmation du mot de passe:</label></td>
            <td><input type="password" placeholder="Mot de passe confirmation" name="password2"> </td></br>
        </tr> 
        <tr>
            <td>
            <div class="btn"><button type="submit" name="inscriptionView">Envoyer le fomrulaire</button></div>
        </tr>
    </td>
    </table>
</form>
   </div>
<?php
$content = ob_get_clean();
require_once("view/templates.php");