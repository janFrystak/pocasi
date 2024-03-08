<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get("/", "Main::getLand");
$routes->get("StaniceCard/(:num)", "Main::getStaniceCard/$1");
$routes->get("InfoStation/(:num)", "Main::getStaniceInfo/$1");
//                                                      DANGER - what dows /$1 do?????????????
//$routes->get("")

