<?php 
/***
 * ROUTER
 */

// Model
include("Model/Manager.php");
include("Model/Places.php");

// Controller
include ("Controller/FrontController.php");


// get route 
$route = $_SERVER[REQUEST_URI];

try {

    if($route == "/") 
    {
        index($bdd);
    }
    else if("/about") 
    {
        about();
    }
    else 
    {
        throw new \Exception('Erreur 404');
    } 
}
catch(\Exception $e)
{
	$errorMessage = $e->getMessage();
	require('Vues/404.php');
}
catch (\RuntimeException $e)
{
  $errorMessage = $e->getMessage();
  require('Vues/404.php');
}


