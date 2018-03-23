<?php 

require_once 'functions.php';
require_once 'modele/database_php.php';

$id = $_GET["id"];

$photo = getPhoto($id);    
getHeader($photo["titre"], "Page d'accueil de la photo 1");


?>

<header>

    <div id="header_content" class="row col_center">
        <?php getMenu(); ?>
    </div>
    
</header>    

<h1><?php echo $photo["titre"] ; ?></h1>

        <?php getFooter(); ?>