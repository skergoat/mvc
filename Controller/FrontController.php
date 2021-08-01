<?php 
// page d'accueil 
function index($bdd)
{
    $places = Places($bdd);
    include ("Vues/frontend/index.php");
}

// page d'accueil 
function about()
{
    include ("Vues/frontend/about.php");
}


