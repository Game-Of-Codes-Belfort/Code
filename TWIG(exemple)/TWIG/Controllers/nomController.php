<?php

include('Models/bdd.php');

require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('Views');
$twig = new Twig_Environment($loader, [
    'cache'=>false
]);


$toutLesEleves = listeEleve();


$template = $twig->load('nom.twig');
echo $template->render(array('listeEleve' => $toutLesEleves));

