<?php ob_start();  

$content = ob_get_clean();
require_once("view/templates.php");