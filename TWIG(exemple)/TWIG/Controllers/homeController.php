<?php

// Fichier censé contenir les requetes à la bdd
include('Models/bdd.php');


/***************************/
/*** initialisation Twig ***/
/***************************/

// Charge l'autoloader permettant de charger les classes de TWIG
require 'vendor/autoload.php';

// CHARGE LE LOADER = dossier contenant les templates
$loader = new Twig_Loader_Filesystem('Views');

// INITIALISE TWIG = ($loader, tableau d'option environnement)
$twig = new Twig_Environment($loader, [
    // N'active pas le cache (mieux pour le développement)
    'cache'=>false
]);


/********************************************************/
/******* Récupération ou traitement des données *********/
/********************************************************/

// On récupère les données voulus de la bdd
$toutLesEleves = listeEleve();


/******************************************/
/****** Envois des données au Views ******/
/******************************************/

// On charge le fichier voulus du dossier Views 
$template = $twig->load('home.twig');
// On envois au fichier les données via Twig
echo $template->render(array('listeEleve' => $toutLesEleves));

