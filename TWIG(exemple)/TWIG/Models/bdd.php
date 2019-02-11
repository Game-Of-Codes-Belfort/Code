<?php

function listeEleve(){

    // Normalement ce tableau est récuperer par une requete à la bdd mais pour l'exemple j'ai juste créer un tableau
    $superTableau = [ 

        ['nom' => 'francois', 'prenom' => 'Nathan'],
        ['nom' => 'fougerolle', 'prenom' => 'Alain']
        
    ];

    return $superTableau;
}