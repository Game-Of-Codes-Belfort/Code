<?php

// Charge l'autoloader permettant de charger les classes de TWIG
require 'vendor/autoload.php';

// ================ ROOTING ================
// Page vaut home par défaut
$page = 'home';

// Si tu as une valeur pour $_GET['p']
if (isset($_GET['page'])) {
    // Dans ce cas remplace la valeur home par ce que tu reçoit en paramètre
    $page = $_GET['page'];
}

// ================ RENDU DU TEMPLATE ================

// CHARGE LE LOADER =               (part du dosier actuel et va dans dossier templates)
$loader = new Twig_Loader_Filesystem('templates');

// INITIALISE TWIG = ($loader, tableau d'option environnement)
$twig = new Twig_Environment($loader, [
    'cache'=>false
    // Permet de mettre en cache le moteur de template une fois compilé dans dossier /tmp
   // 'cache' => __DIR__ . '/tmp'

]);

if ($page === 'home') {
    
    // Indique le fichier a rendre = va sur home.twig
    echo $twig->render('home.twig');

}













//https://twig.symfony.com/doc/2.x/api.html#twig-loader-filesystem

//Video Graffikart
//https://www.youtube.com/watch?v=mpTtPt62s_w