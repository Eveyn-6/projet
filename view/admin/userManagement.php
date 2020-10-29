<?php ob_start(); ?>
<div class="contentDelete"> 
<?php foreach ($membres as $value) { ?>
     <?= $value['pseudo'] ?>:<br />
     <div class="delete"> 
     <form action="index.php?action=delete" method='POST'>
          <input type="hidden" name="id" value="<?= $value['ID'] ?>"/>
           
          <button id="manage" type="submit" name="delete">Suppr </button>
          
     </form>
</div>

<?php } ?>

</div>
<?php
$adminContent = ob_get_clean();
require_once('view/admin/templateAdmin.php');
