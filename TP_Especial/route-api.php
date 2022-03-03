<?php

require_once ('./libs/Router.php');
require_once('./Controllers/ControllerApi.php');

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comentarios/:ID', 'GET', 'ControllerApi', 'getComentarios');
$router->addRoute('comentarios', 'POST', 'controllerApi', 'insertComentarios');
$router->addRoute('comentarios/:ID', 'DELETE', 'controllerApi', 'deleteComentario');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);