<?php ob_start(); ?>
<h4>Bienvenue sur Eveyn Photographie</h4>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=pictures', 'root', '');
if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
    $insert = $bdd->query("INSERT INTO slider (image_path) VALUES ('$path')");
    if($insert){
        move_uploaded_file($_FILES['image']['tmp_name'], $path);
        $message ='image chargée avec succès';

}
else{
    $message='échec du chargement de l\image';
}
}
$content = ob_get_clean();
require_once("view/templates.php");
