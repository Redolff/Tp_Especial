<?php

require_once ('./libs/Router.php');
require_once ('Controllers/controllerApi.php');

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comentarios/:ID', 'GET', 'ControllerApi', 'getComentarios');
$router->addRoute('comentarios/:ID', 'DELETE', 'ControllerApi', 'deleteComentario');
$router->addRoute('comentarios', 'POST', 'ControllerApi', 'insertComentario');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
