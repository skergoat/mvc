<?php 

// index 
function Places($bdd)
{
    return $bdd->query("SELECT * FROM places")->fetchAll();
}

