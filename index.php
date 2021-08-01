<?php 
/***
 * ROUTER
 */

include_once ("Controller/FrontController.php");

// get route 
$route = $_SERVER[REQUEST_URI];

if($route == "/") 
{
    index();
}

