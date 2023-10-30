<?php
// Inclusion des fichiers principaux
include_once './_config/config.php';
include_once './_config/db.php';
include_once './_functions/functions.php';

//Définitions de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

//Array contenant toute les pages
$allPages = scandir('controllers/');

//Verification de l'existence de la page
if (in_array($page.'_controller.php', $allPages)) {

    //inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';
    
} else {
    //Retour d'une erreur
    echo 'Erreur 404';
}

